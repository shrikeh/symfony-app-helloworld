<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Http;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Shrikeh\App\Query\QueryBus\CorrelatingQueryBus;
use Shrikeh\SymfonyApp\Http\Action;
use Shrikeh\SymfonyApp\Http\Action\Cqrs\QueryFactory\CorrelatedQueryFactory;
use Shrikeh\SymfonyApp\Http\Action\ResultResponseFactory;

final readonly class Greetings implements Action
{

    public function __construct(
        private CorrelatedQueryFactory $queryFactory,
        private CorrelatingQueryBus $queryBus,
        private ResultResponseFactory $resultResponseFactory,
    ) {

    }

    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $result = $this->queryBus->handle(
            $this->queryFactory->build($request)
        );

        return $this->resultResponseFactory->response(
            $result,
            $request
        );
    }
}
