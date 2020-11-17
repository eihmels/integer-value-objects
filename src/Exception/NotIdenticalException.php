<?php

declare(strict_types=1);

namespace ObjectValues\Exception;

use InvalidArgumentException;
use ObjectValues\NumberInterface;

class NotIdenticalException extends InvalidArgumentException
{
    public static function notIdenticalException(
        NumberInterface $number,
        NumberInterface $secondNumber
    ): NotIdenticalException {
        return new self(
            sprintf(
                'value is not identical %s %s and %s %s',
                get_class($number),
                $number->native(),
                get_class($secondNumber),
                $secondNumber->native()
            )
        );
    }
}
