<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class IsoReasonReturnCode
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 4, 'IsoReasonReturnCode');

        $this->value = trim($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
