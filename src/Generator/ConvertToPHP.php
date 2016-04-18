<?php

namespace jamesiarmes\PEWS\Generator;

use jamesiarmes\PEWS\API\ClassMap;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

use Goetas\Xsd\XsdToPhp\Php\PathGenerator\Psr4PathGenerator;
use Goetas\Xsd\XsdToPhp\AbstractConverter;
use Symfony\Component\Console\Output\OutputInterface;
use Zend\Code\Generator\FileGenerator;
use Goetas\Xsd\XsdToPhp\Naming\NamingStrategy;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClass;
use Zend\Code\Generator;
use Zend\Code\Reflection\ClassReflection;

/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 7-8-15
 * Time: 15:18
 */
class ConvertToPHP extends \Goetas\Xsd\XsdToPhp\Command\ConvertToPHP
{
    /**
     *
     * @see Console\Command\Command
     */
    protected function configure()
    {
        parent::configure();

        $this->setDefinition(array(
            new InputArgument(
                'src',
                InputArgument::OPTIONAL | InputArgument::IS_ARRAY,
                'Where is located your XSD definitions',
                array(
                    __DIR__ . '/../../Resources/wsdl/types.xsd',
                    __DIR__ . '/../../Resources/wsdl/messages.xsd'
                )
            ),
                new InputOption(
                    'ns-map',
                    null,
                    InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                    'How to map XML namespaces to PHP namespaces? Syntax: <info>XML-namespace;PHP-namespace</info>',
                    array(
                    'http://schemas.microsoft.com/exchange/services/2006/types;/jamesiarmes/PEWS/API/Type/',
                    'http://schemas.microsoft.com/exchange/services/2006/messages;/jamesiarmes/PEWS/API/Message/'
                    )
                ),
                new InputOption(
                    'ns-dest',
                    null,
                    InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                    'Where place the generated files? Syntax: <info>PHP-namespace;destination-directory</info>',
                    array(
                    'jamesiarmes/PEWS/API/Type/;' . __DIR__ . '/../API/Type',
                    'jamesiarmes/PEWS/API/Message/;' . __DIR__ . '/../API/Message'
                    )
                ),
                new InputOption(
                    'alias-map',
                    null,
                    InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                    'How to map XML namespaces into existing PHP classes? Syntax: <info>XML-namespace;XML-type;PHP-type</info>. '
                ),
                new InputOption(
                    'naming-strategy',
                    null,
                    InputOption::VALUE_OPTIONAL,
                    'The naming strategy for classes. short|long',
                    'short'
                )
        ));
    }

    protected function getConverterter(NamingStrategy $naming)
    {
        return new PhpConverter($naming);
    }

    protected function convert(AbstractConverter $converter, array $schemas, array $targets, OutputInterface $output)
    {
        $generator = new ClassGenerator();
        $pathGenerator = new Psr4PathGenerator($targets);
        $progress = $this->getHelperSet()->get('progress');

        $converter->addAliasMap(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'Or',
            function ($type) use ($schemas) {
                return "OrElement";
            }
        );

        $converter->addAliasMap(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'And',
            function ($type) use ($schemas) {
                return "AndElement";
            }
        );

        $converter->addAliasMap(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'EmailAddress',
            function ($type) use ($schemas) {
                return "jamesiarmes\\PEWS\\API\\Type\\EmailAddressType";
            }
        );

        $items = $converter->convert($schemas);
        $progress->start($output, count($items));
        $classMap = [];

        foreach ($items as $item) {
            /** @var PHPClass $item */

            $progress->advance(1, true);
            $output->write(" Creating <info>" . $output->getFormatter()->escape($item->getFullName()) . "</info>... ");
            $path = $pathGenerator->getPath($item);

            $fileGen = new FileGenerator();
            $fileGen->setFilename($path);
            $classGen = new \Zend\Code\Generator\ClassGenerator();

            $itemClass = $item->getNamespace() . '\\' . $item->getName();
            if (class_exists($itemClass)) {
                $fileGen = FileGenerator::fromReflectedFileName($path);
                $fileGen->setFilename($path);

                $classGen = Generator\ClassGenerator::fromReflection(new ClassReflection($itemClass));
            }

            if ($generator->generate($classGen, $item)) {
                $namespace = $classGen->getNamespaceName();
                $fileGen->setClass($classGen);

                $fileGen->write();
                $output->writeln("done.");
                if (isset($item->type) && $item->type->getName() != "") {
                    $classMap[$item->type->getName()] =
                        '\\' . $namespace . '\\' . $classGen->getName();
                }
            } else {
                $output->write("skip.");
            }
        }

        $mappingClassReflection = new ClassReflection(ClassMap::class);
        $mappingClass = Generator\ClassGenerator::fromReflection($mappingClassReflection);
        $mappingClass->getProperty('classMap')->setDefaultValue($classMap);

        $fileGen = new FileGenerator();
        $fileGen->setFilename($mappingClassReflection->getFileName());
        $fileGen->setClass($mappingClass);
        $fileGen->write();

        $progress->finish();
    }
}
