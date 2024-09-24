<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Console\Input\Traits;

use Ds\Map;
use Shrikeh\HelloWorld\Console\Input\HelloWorld;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

trait Extract
{
    public function extract(InputInterface $input, OutputInterface $output, ?Map $data = new Map()): Map
    {
        $data->put($this->inputName(), $input->getArgument($this->inputName()->value));

        return $data;
    }

    abstract private function inputName(): HelloWorld;
}
