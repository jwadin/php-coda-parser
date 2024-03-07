<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class TransactionCodeType
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 1, 'TransactionCodeType');

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
