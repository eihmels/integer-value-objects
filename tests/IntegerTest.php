<?php
declare(strict_types=1);

use ObjectValues\Integer\Integer;
use PHPUnit\Framework\TestCase;

final class IntegerTest extends TestCase
{
    /** @dataProvider validIntegers */
    public function testWithPositiveNumber(int $integer): void
    {
        $integerValueObject = Integer::create($integer);
        self::assertEquals($integer, $integerValueObject->getNative());
    }

    public function validIntegers(): array
    {
        return [[1], [2]];
    }
}