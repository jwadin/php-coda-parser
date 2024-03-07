<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class CategoryPurpose
{
    private string $value;

    public function __construct(string $value)
    {
        validateStringLength($value, 4, 'CategoryPurpose');

        $this->value = trim($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
