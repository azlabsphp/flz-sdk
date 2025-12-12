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

    /**
     * returns the payment reference value of the transaction
     * 
     * @return null|string 
     */
    public function getPaymentRef(): ?string;


    /**
     * returns transaction order reference property value
     * 
     * @return null|string 
     */
    public function getOrderRef(): ?string;
}