<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\trimSpace;

class Message
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = trimSpace($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
