<?php

namespace Tests\Unit\Shipping\Domain\ValueObject;

use DomainException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Waybill\Shipping\Domain\ValueObject\Weight;

final class WeightTest extends TestCase
{
    public function test_it_exposes_its_weight_in_grams(): void
    {
        $weight = new Weight(1500);

        self::assertSame(1500, $weight->grams());
    }

    #[DataProvider('invalidWeights')]
    public function test_it_rejects_non_positive_weights(int $grams): void
    {
        $this->expectException(DomainException::class);

        new Weight($grams);
    }

    public static function invalidWeights(): array
    {
        return [
            'zero' => [0],
            'negative' => [-1],
        ];
    }
}
