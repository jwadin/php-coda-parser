<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class TransactionReference
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 16, 'TransactionReference');

        $this->value = trim($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
