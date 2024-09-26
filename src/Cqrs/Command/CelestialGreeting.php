<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Cqrs\Command;

use JsonSerializable;
use Shrikeh\App\Message\Command;
use Shrikeh\App\Message\Correlated;
use Shrikeh\App\Message\Correlation\Traits\WithCorrelation;

final readonly class CelestialGreeting implements Command, Correlated, JsonSerializable
{
    use WithCorrelation;

    public const string DEFAULT_GREETING = 'Hello';
    public const string DEFAULT_CELESTIAL_BODY = 'World';

    public function __construct(
        public string $greeting = self::DEFAULT_GREETING,
        public string $celestialBody = self::DEFAULT_CELESTIAL_BODY
    ) {
    }

    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
    }
}
