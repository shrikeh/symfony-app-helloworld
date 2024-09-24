<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Console;

use Shrikeh\App\Command\CommandBus\CorrelatingCommandBus;
use Shrikeh\App\Command\CommandBus\Exception\CommandBusException;
use Shrikeh\SymfonyApp\Console\Action;
use Shrikeh\SymfonyApp\Console\Action\ConfigurableAction;
use Shrikeh\SymfonyApp\Console\Action\Cqrs\CommandFactory\CorrelatedCommandFactory;
use Shrikeh\SymfonyApp\Console\Action\ResultOutputFormatter;
use Shrikeh\HelloWorld\Console\Exception\ErrorRunningCommand;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'shrikeh:hello:world'
)]
final class Greet extends Command implements Action, ConfigurableAction
{
    public function __construct(
        private readonly CorrelatedCommandFactory $commandFactory,
        private readonly CorrelatingCommandBus $commandBus,
        private readonly ResultOutputFormatter $resultFormatter,
    ) {
        parent::__construct();
    }

    #[\Override] protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $result = $this->commandBus->handle(
                $this->commandFactory->build($input, $output)
            );
        } catch (CommandBusException $exc) {
            throw new ErrorRunningCommand($exc);
        }

        $this->resultFormatter->render($result, $input, $output);

        return self::SUCCESS;
    }
}
