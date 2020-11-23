<?php

declare(strict_types=1);

namespace Tests\Integer;

use ObjectValues\Integer;
use ObjectValues\NaturalNumber;
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

    /** @dataProvider greaterLowerResult */
    public function testGreaterThan(
        NumberInterface $greaterNumber,
        NumberInterface $lowerNumber,
        bool $result
    ): void {
        self::assertEquals($greaterNumber->greaterThan($lowerNumber), $result);
    }

    /** @dataProvider equalsResult */
    public function testEquals(
        NumberInterface $firstNumber,
        NumberInterface $secondNumber,
        bool $result
    ): void {
        self::assertEquals($firstNumber->equals($secondNumber), $result);
    }

    /** @dataProvider greaterLowerResult */
    public function testLowerThan(
        NumberInterface $lowerNumber,
        NumberInterface $greaterNumber,
        bool $result
    ): void {
        self::assertEquals($greaterNumber->lowerThan($lowerNumber), $result);
    }

    public function testToString(): void
    {
        $number = Integer::create(1);
        self::assertEquals('1', (string) $number);
    }

    public static function equalsResult(): array
    {
        return [
            [
                Integer::create(1),
                Integer::create(1),
                true,
            ],
            [
                Integer::create(1),
                Integer::create(2),
                false,
            ],
            [
                Integer::create(1),
                NaturalNumber::create(1),
                true,
            ],
        ];
    }

    public static function greaterLowerResult(): array
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

    public static function validIntegers(): array
    {
        return [[1], [-1]];
    }
}
