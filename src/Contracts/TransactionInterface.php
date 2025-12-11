<?php

namespace Drewlabs\Flz\Contracts;

interface TransactionInterface
{

    /**
     * returns `true` if transaction is marked as processed on the flz plateform
     * 
     * @return bool 
     */
    public function isProcessed(): bool;
}