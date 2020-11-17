<?php

declare(strict_types=1);

namespace Tests\Integer;

use ObjectValues\Exception\NotANaturalNumberException;
use ObjectValues\NaturalNumberWithoutNull;
use PHPUnit\Framework\TestCase;

class NaturalNumberWithoutNullTest extends TestCase
{
    public function testCreateNotAllowedNullNumber(): void
    {
        $this->expectErrorMessage(NotANaturalNumberException::nullNotAllowedException()->getMessage());
        NaturalNumberWithoutNull::create(0);
    }

    public function testCreateNegativeNumber(): void
    {
        $this->expectErrorMessage(NotANaturalNumberException::notANaturalNumberException(-1)->getMessage());
        NaturalNumberWithoutNull::create(-1);
    }

    public function testCreatePositiveNumber(): void
    {
        $this->expectNotToPerformAssertions();
        NaturalNumberWithoutNull::create(1);
    }
}
