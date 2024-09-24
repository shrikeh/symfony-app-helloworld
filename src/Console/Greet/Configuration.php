<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Console\Greet;

use Shrikeh\SymfonyApp\Console\Action\ConfigurableAction;
use Shrikeh\SymfonyApp\Console\Action\Configurator;

final readonly class Configuration implements Configurator
{

    #[\Override] public function configure(ConfigurableAction $action): ConfigurableAction
    {
        // TODO: Implement configure() method.
    }
}
