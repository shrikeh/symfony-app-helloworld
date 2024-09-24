<?php

declare(strict_types=1);

namespace Shrikeh\HelloWorld\Http\Formatter\Json;

use Ergebnis\Json\Json;
use Ergebnis\Json\Normalizer\Normalizer;
use Shrikeh\SymfonyApp\Http\Formatter\Json\Encoder;
use Symfony\Component\Serializer\SerializerInterface;

final readonly class Ergebnis implements Encoder
{
    /**
     * @param Normalizer $normalizer
     * @param SerializerInterface $serializer
     * @param array<string, string> $contexts
     */
    public function __construct(
        private Normalizer $normalizer,
        private SerializerInterface $serializer,
        private array $contexts = []
    ) {
    }

    public function encode(mixed $data): string
    {
        return $this->normalizer->normalize($this->serialize($data))->encoded();
    }

    private function serialize(mixed $data): Json
    {
        return Json::fromString(
            $this->serializer->serialize($data, 'json', $this->contexts)
        );
    }
}
