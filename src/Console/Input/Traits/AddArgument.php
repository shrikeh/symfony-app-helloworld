<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Console\Input\Traits;

use Shrikeh\HelloWorld\Console\Input\HelloWorld;
use Symfony\Component\Console\Input\InputArgument;

trait AddArgument
{
    private readonly string $description;
    private readonly string|bool|int|float|array|null $default;

    private function addArgument(): InputArgument
    {
        return new InputArgument(
            name: $this->inputName()->value,
            mode: InputArgument::OPTIONAL,
            description: $this->description,
            default: $this->default,
        );
    }

    abstract private function inputName(): HelloWorld;
}
