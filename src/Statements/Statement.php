<?php

namespace Codelicious\Coda\Statements;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class Statement
{
    public function __construct(
        private \DateTime $date,
        private Account $account,
        private float $initialBalance,
        private float $newBalance,
        private string $informationalMessage,
        private array $transactions
    ) {
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function getAccount(): Account
    {
        return $this->account;
    }

    public function getInitialBalance(): float
    {
        return $this->initialBalance;
    }

    public function getNewBalance(): float
    {
        return $this->newBalance;
    }

    public function getInformationalMessage(): string
    {
        return $this->informationalMessage;
    }

    /**
     * @return Transaction[]
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }
}
