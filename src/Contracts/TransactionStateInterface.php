<?php

namespace Drewlabs\Flz\Contracts;

interface TransactionStateInterface extends TransactionInterface
{
    /**
     * return transaction state code
     * 
     * @return int 
     */
    public function getStatus(): int;

    /**
     * return transaction status description
     * 
     * @return string 
     */
    public function getReasonPhrase(): string;
}