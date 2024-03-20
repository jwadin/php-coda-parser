<?php

namespace Codelicious\Coda\Statements;

use Codelicious\Coda\Values\SepaDirectDebit;

/**
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class Transaction
{
    /** @var AccountOtherParty */
    private $account;
    /** @var int */
    private $statementSequence;
    /** @var int */
    private $transactionSequence;
    /** @var int */
    private $transactionDetailSequence;
    /** @var int */
    private $transactionCodeType;
    /** @var \DateTime */
    private $transactionDate;
    /** @var \DateTime */
    private $valutaDate;
    /** @var float */
    private $amount;
    /** @var string */
    private $message;
    /** @var string */
    private $structuredMessage;
    /** @var SepaDirectDebit|null */
    private $sepaDirectDebit;
    /** @var Transaction[] */
    private $transactionDetail = [];

    public function __construct(
        AccountOtherParty $account,
        int $statementSequence,
        int $transactionSequence,
        int $transactionDetailSequence,
        int $transactionCodeType,
        \DateTime $transactionDate,
        \DateTime $valutaDate,
        float $amount,
        string $message,
        string $structuredMessage,
        ?SepaDirectDebit $sepaDirectDebit
    ) {
        $this->account = $account;
        $this->statementSequence = $statementSequence;
        $this->transactionSequence = $transactionSequence;
        $this->transactionDetailSequence = $transactionDetailSequence;
        $this->transactionCodeType = $transactionCodeType;
        $this->transactionDate = $transactionDate;
        $this->valutaDate = $valutaDate;
        $this->amount = $amount;
        $this->message = $message;
        $this->structuredMessage = $structuredMessage;
        $this->sepaDirectDebit = $sepaDirectDebit;
    }

    public function getAccount(): AccountOtherParty
    {
        return $this->account;
    }

    public function getTransactionDate(): \DateTime
    {
        return $this->transactionDate;
    }

    public function getValutaDate(): \DateTime
    {
        return $this->valutaDate;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getStructuredMessage(): string
    {
        return $this->structuredMessage;
    }

    /**
     * @return SepaDirectDebit|null
     */
    public function getSepaDirectDebit()
    {
        return $this->sepaDirectDebit;
    }

    public function getStatementSequence(): int
    {
        return $this->statementSequence;
    }

    public function getTransactionSequence(): int
    {
        return $this->transactionSequence;
    }

    public function getTransactionDetailSequence(): int
    {
        return $this->transactionDetailSequence;
    }

    public function getTransactionCodeType(): int
    {
        return $this->transactionCodeType;
    }

    public function addTransactionDetail(Transaction $transactionDetail): void
    {
        $this->transactionDetail[] = $transactionDetail;
    }

    public function getSubTransactions(): array
    {
        return $this->transactionDetail;
    }
}
