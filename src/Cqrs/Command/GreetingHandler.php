<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Bus\Command;

use Shrikeh\App\Command\CommandHandler;

final readonly class GreetingHandler implements CommandHandler
{
    public function __invoke(CelestialGreeting $celestialGreeting): CelestialBodyGreeted
    {

    }
}
