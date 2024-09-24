<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Console\Exception;

use RuntimeException;
use Shrikeh\App\Command\CommandBus\Exception\CommandBusException;
use Shrikeh\SymfonyApp\Console\Action\Exception\ConsoleActionException;
use Shrikeh\HelloWorld\Exception\HelloWorldException;

final class ErrorRunningCommand extends RuntimeException implements ConsoleActionException, HelloWorldException
{
    public function __construct(CommandBusException $previous)
    {
        parent::__construct(
            message: 'An error occurred while running this command.',
            previous: $previous,
        );
    }
}
