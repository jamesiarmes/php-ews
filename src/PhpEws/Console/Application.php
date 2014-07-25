<?php

namespace PhpEws\Console;

use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    const NAME = 'PhpEws';

    const VERSION = '0.0.1-DEV';

    public function __construct()
    {
        parent::__construct(self::NAME, self::VERSION);

        $this->addCommands([
            new Command\ConnectCommand(),
        ]);
    }
}
