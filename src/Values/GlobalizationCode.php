<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class GlobalizationCode
{
    private int $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 1, 'GlobalizationCode');

        $this->value = (int) $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
