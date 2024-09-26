<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Http\Greetings;

use Psr\Http\Message\ServerRequestInterface;
use Shrikeh\HelloWorld\Cqrs\Query\Greetings;
use Shrikeh\SymfonyApp\Http\Action\Cqrs\QueryFactory;

final readonly class GreetingsFactory implements QueryFactory
{
    public function build(ServerRequestInterface $request): Greetings
    {
        return new Greetings();
    }
}
