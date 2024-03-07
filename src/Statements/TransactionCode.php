<?php

namespace Codelicious\Coda\Statements;

/**
 * @author Christophe GOsiau (christophe.gosiau@tigron.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class TransactionCode
{
    public function __construct(
        private string $family,
        private string $type,
        private string $operation,
        private string $category
    ) {
    }

    public function getFamily(): string
    {
        return $this->family;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getOperation(): string
    {
        return $this->operation;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}
