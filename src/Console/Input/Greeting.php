<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Console\Input;

use Ds\Map;
use Shrikeh\SymfonyApp\Console\Input;
use Shrikeh\HelloWorld\Console\Input\Traits\AddArgument;
use Shrikeh\HelloWorld\Console\Input\Traits\Extract;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final readonly class Greeting implements Input
{
    use AddArgument;
    use Extract;

    public const HelloWorld INPUT = HelloWorld::GREETING;

    public const string DEFAULT_GREETING = 'Hello';

    public function __construct(
        string $description,
        string $defaultGreeting = self::DEFAULT_GREETING
    ) {
        $this->description = $description;
        $this->default = $defaultGreeting;
    }

    public function add(InputDefinition $definition): InputDefinition
    {
        $definition->addArgument($this->addArgument());
    }

    private function inputName(): HelloWorld
    {
        return self::INPUT;
    }
}
