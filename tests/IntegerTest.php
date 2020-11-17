<?php

declare(strict_types=1);

namespace Tests\Integer;

use ObjectValues\Integer;
use PHPUnit\Framework\TestCase;

final class IntegerTest extends TestCase
{
    /** @dataProvider validIntegers */
    public function testNative(int $integer): void
    {
        $integerValueObject = Integer::create($integer);
        self::assertEquals($integer, $integerValueObject->native());
    }

    public function testGreaterThanWithEqualNumbers(): void
    {
        $greaterValue = Integer::create(1);
        $lowerValue = Integer::create(1);

        self::assertFalse($greaterValue->greaterThan($lowerValue));
    }

    public function testGreaterThanWithGreaterNumber(): void
    {
        $greaterValue = Integer::create(2);
        $lowerValue = Integer::create(1);

        self::assertTrue($greaterValue->greaterThan($lowerValue));
    }

    public function testGreaterThanWithSmallerNumber(): void
    {
        $greaterValue = Integer::create(2);
        $smallerValue = Integer::create(1);

        self::assertFalse($smallerValue->greaterThan($greaterValue));
    }

    public function testLowerThanWithEqualNumbers(): void
    {
        $greaterValue = Integer::create(1);
        $smallerValue = Integer::create(1);

        self::assertFalse($greaterValue->lowerThan($smallerValue));
    }

    public function testLowerThanWithGreaterNumber(): void
    {
        $greaterValue = Integer::create(2);
        $lowerValue = Integer::create(1);

        self::assertTrue($lowerValue->lowerThan($greaterValue));
    }

    public function testGreaterThanWithLowerNumber(): void
    {
        $greaterValue = Integer::create(2);
        $lowerValue = Integer::create(1);

        self::assertFalse($lowerValue->greaterThan($greaterValue));
    }

    public function testEqualsWithToInteger(): void
    {
        $integerValueObject = Integer::create(1);
        $secondIntegerValueObject = Integer::create(1);

        self::assertTrue($integerValueObject->equals($secondIntegerValueObject));
    }

    public function validIntegers(): array
    {
        return [[1], [-1]];
    }
}
