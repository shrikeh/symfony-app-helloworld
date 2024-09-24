<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Http\Greetings;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Shrikeh\App\Message\Result;
use Shrikeh\HelloWorld\Cqrs\Query\PreviousGreetings;
use Shrikeh\SymfonyApp\Http\Action\ResultResponseFactory;
use Shrikeh\SymfonyApp\Http\Action\ResultResponseFactory\Exception\UnsupportedResult;
use Shrikeh\SymfonyApp\Http\Formatter\Json\Encoder;
use Teapot\StatusCode;

final readonly class CelestialGreetingsResponseFactory implements ResultResponseFactory
{
    public function __construct(private Encoder $encoder)
    {
    }

    public function response(Result $result, ?ServerRequestInterface $request): ResponseInterface
    {
        if (!$result instanceof PreviousGreetings) {
            throw new UnsupportedResult($result, $this);
        }

        return new Response(
            status: StatusCode::OK,
            body: $this->encodeResult($result)
        );
    }

    private function encodeResult(PreviousGreetings $previousGreetings): string
    {
        return $this->encoder->encode($previousGreetings);
    }
}
