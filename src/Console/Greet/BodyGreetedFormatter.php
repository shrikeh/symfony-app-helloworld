<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Console\Greet;

use Shrikeh\App\Message\Result;
use Shrikeh\SymfonyApp\Console\Action\ResultOutputFormatter;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final readonly class BodyGreetedFormatter implements ResultOutputFormatter
{
    public function render(Result $result, InputInterface $input, OutputInterface $output): void
    {
        // TODO: Implement render() method.
    }
}
