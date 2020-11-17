<?php

declare(strict_types=1);

namespace ObjectValues\Exception;

use InvalidArgumentException;

class NotANaturalNumberException extends InvalidArgumentException
{
    public const REASON_NEGATIVE_NUMBER_EXCEPTION = 'its a Negative Number';
    public const REASON_NULL_NOT_ALLOWED = '0 not allowed';

    public static function notANaturalNumberException(
        int $integer,
        string $reason = self::REASON_NEGATIVE_NUMBER_EXCEPTION
    ): NotANaturalNumberException {
        return new self(sprintf('%s is not a natural number, reason: %s', (string)$integer, $reason));
    }

    public static function nullNotAllowedException(): NotANaturalNumberException
    {
        return self::notANaturalNumberException(
            0,
            self::REASON_NULL_NOT_ALLOWED
        );
    }
}
