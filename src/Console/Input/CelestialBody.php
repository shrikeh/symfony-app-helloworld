<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Console\Input;

use Shrikeh\SymfonyApp\Console\Input;
use Shrikeh\HelloWorld\Console\Input\Traits\AddArgument;
use Shrikeh\HelloWorld\Console\Input\Traits\Extract;
use Symfony\Component\Console\Input\InputDefinition;

final readonly class CelestialBody implements Input
{
    use AddArgument;
    use Extract;

    public const HelloWorld INPUT = HelloWorld::CELESTIAL_BODY;

    public const string DEFAULT_CELESTIAL_BODY = 'World';

    public function __construct(string $description, string $defaultCelestialBody = self::DEFAULT_CELESTIAL_BODY)
    {
        $this->description = $description;
        $this->default = $defaultCelestialBody;
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
