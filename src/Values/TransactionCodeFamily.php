<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringDigitOnly;
use function Codelicious\Coda\Helpers\validateStringLength;

class TransactionCodeFamily
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 2, 'TransactionCodeFamily');
        validateStringDigitOnly($value, 'TransactionCodeFamily');

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
