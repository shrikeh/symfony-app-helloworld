<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Cqrs\Query;

use Shrikeh\App\Message\Correlated;
use Shrikeh\App\Message\Correlation\Traits\WithCorrelation;
use Shrikeh\App\Message\Result;

final readonly class PreviousGreetings implements Result, Correlated
{
    use WithCorrelation;
}
