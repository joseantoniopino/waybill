<?php

namespace Waybill\Shipping\Domain\ValueObject;

final readonly class Weight
{
    public function __construct(private int $grams)
    {
        if ($grams <= 0) {
            throw new \DomainException('Grams must be greater than 0');
        }
    }

    public function grams(): int
    {
        return $this->grams;
    }
}
