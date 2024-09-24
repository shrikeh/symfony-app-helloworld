<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Bus\Command;

use Shrikeh\App\Message\Correlated;
use Shrikeh\App\Message\Correlation\Traits\WithCorrelation;
use Shrikeh\App\Message\Result;

final readonly class CelestialBodyGreeted implements Result, Correlated
{
    use WithCorrelation;
}
