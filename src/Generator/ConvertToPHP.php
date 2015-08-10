<?php

namespace jamesiarmes\PEWS\Generator;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

use Goetas\Xsd\XsdToPhp\Php\PathGenerator\Psr4PathGenerator;
use Goetas\Xsd\XsdToPhp\AbstractConverter;
use Symfony\Component\Console\Output\OutputInterface;
use Zend\Code\Generator\FileGenerator;
use Goetas\Xsd\XsdToPhp\Naming\NamingStrategy;

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
            new InputArgument('src', InputArgument::OPTIONAL | InputArgument::IS_ARRAY,
                'Where is located your XSD definitions',
                array(__DIR__ . '/../../Resources/wsdl/types.xsd',
                    __DIR__ . '/../../Resources/wsdl/messages.xsd')),
            new InputOption('ns-map', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'How to map XML namespaces to PHP namespaces? Syntax: <info>XML-namespace;PHP-namespace</info>',
                array(
                    'http://schemas.microsoft.com/exchange/services/2006/types;/jamesiarmes/PEWS/API/TypeTest/',
                    'http://schemas.microsoft.com/exchange/services/2006/messages;/jamesiarmes/PEWS/API/Messages/'
                )),
            new InputOption('ns-dest', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'Where place the generated files? Syntax: <info>PHP-namespace;destination-directory</info>',
                array(
                    'jamesiarmes/PEWS/API/TypeTest/;' . __DIR__ . '/../API/TypeTest',
                    'jamesiarmes/PEWS/API/Messages/;' . __DIR__ . '/../API/Messages'
                )),
            new InputOption('alias-map', null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'How to map XML namespaces into existing PHP classes? Syntax: <info>XML-namespace;XML-type;PHP-type</info>. '),
            new InputOption('naming-strategy', null, InputOption::VALUE_OPTIONAL,
                'The naming strategy for classes. short|long', 'short')
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

        $items = $converter->convert($schemas);
        $progress->start($output, count($items));
        $classMap = [];

        foreach ($items as $item) {
            $progress->advance(1, true);
            $output->write(" Creating <info>" . $output->getFormatter()->escape($item->getFullName()) . "</info>... ");
            $path = $pathGenerator->getPath($item);

            $fileGen = new FileGenerator();
            $fileGen->setFilename($path);
            $classGen = new \Zend\Code\Generator\ClassGenerator();

            if ($generator->generate($classGen, $item)) {
                $fileGen->setClass($classGen);

                $fileGen->write();
                $output->writeln("done.");
                if (isset($item->type) && $item->type->getName() != "") {
                    $classMap[$item->type->getName()] =
                        '\\' . $classGen->getNamespaceName() . '\\' . $classGen->getName();
                }

            } else {
                $output->write("skip.");

            }
        }

        $classMapFile = __DIR__ . '/../../Resources/classMap.php';
        file_put_contents($classMapFile, '<?php

return ' . var_export($classMap, true) . ';
');

        $progress->finish();
    }
}
