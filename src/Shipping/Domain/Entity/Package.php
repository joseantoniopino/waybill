<?php

namespace Waybill\Shipping\Domain\Entity;

use Waybill\Shipping\Domain\ValueObject\Weight;

final class Package
{
    public function __construct(
        private ?int $id,
        private Weight $weight,
    ) {}

    public function id(): ?int
    {
        return $this->id;
    }

    public function weight(): Weight
    {
        return $this->weight;
    }
}
