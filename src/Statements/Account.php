<?php

namespace Codelicious\Coda\Statements;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class Account
{
    public function __construct(
        private string $name,
        private string $bic,
        private string $companyIdentificationNumber,
        private string $number,
        private string $currencyCode,
        private string $countryCode
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

    public function getCompanyIdentificationNumber(): string
    {
        return $this->companyIdentificationNumber;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
}
