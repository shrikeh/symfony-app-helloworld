<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Cqrs\Query;

use Shrikeh\App\Message\Correlated;
use Shrikeh\App\Message\Correlation\Traits\WithCorrelation;
use Shrikeh\App\Message\Query;

final readonly class Greetings implements Query, Correlated
{
    use WithCorrelation;
}
