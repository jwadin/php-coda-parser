<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class TransactionCodeCategory
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 3, 'TransactionCodeCategory');

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
