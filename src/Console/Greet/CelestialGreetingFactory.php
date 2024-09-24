<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Console\Greet;

use Shrikeh\SymfonyApp\Console\Action\Cqrs\CommandFactory;
use Shrikeh\HelloWorld\Bus\Command\CelestialGreeting;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final readonly class CelestialGreetingFactory implements CommandFactory
{

    public function build(InputInterface $input, OutputInterface $output): CelestialGreeting
    {
        return new CelestialGreeting();
    }
}
