<?php

declare(strict_types = 1);

namespace Tests\Integer;

use ObjectValues\Integer;
use ObjectValues\NumberInterface;
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

    /** @dataProvider GreaterLowerResult */
    public function testGreaterThan(
        NumberInterface $greaterNumber,
        NumberInterface $lowerNumber,
        $result
    ): void {
        self::assertEquals($greaterNumber->greaterThan($lowerNumber), $result);
    }

    /** @dataProvider GreaterLowerResult */
    public function testLowerThan(
        NumberInterface $lowerNumber,
        NumberInterface $greaterNumber,
        $result
    ): void {
        self::assertEquals($greaterNumber->lowerThan($lowerNumber), $result);
    }

    public function GreaterLowerResult(): array
    {
        return [
            [
                Integer::create(1),
                Integer::create(1),
                false,
            ],
            [
                Integer::create(2),
                Integer::create(1),
                true,
            ],
            [
                Integer::create(1),
                Integer::create(2),
                false,
            ],
        ];
    }

    public function validIntegers(): array
    {
        return [[1], [-1]];
    }
}
