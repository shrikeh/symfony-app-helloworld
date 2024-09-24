<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Cqrs\Query;

use Shrikeh\App\Query\QueryHandler;

final readonly class GreetingsHandler implements QueryHandler
{
    public function __invoke(Greetings $greetings): PreviousGreetings
    {
        return new PreviousGreetings();
    }
}
