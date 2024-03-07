<?php

namespace Codelicious\Coda\Values;

class AccountNumber
{
    private string $value;
    private bool $isIbanNumber;

    public function __construct(string $value, bool $isIbanNumber)
    {
        $this->value = $value;
        $this->isIbanNumber = $isIbanNumber;
    }

    public function isIbanNumber(): bool
    {
        return $this->isIbanNumber;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
