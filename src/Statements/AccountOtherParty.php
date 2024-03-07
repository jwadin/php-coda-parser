<?php

namespace Codelicious\Coda\Statements;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class AccountOtherParty
{
    public function __construct(
        private string $name,
        private string $bic,
        private string $number,
        private string $currencyCode
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBic(): string
    {
        return $this->bic;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
}
