<?php

namespace Drewlabs\Flz\Contracts;

interface TransactionClientInterface extends RequestClientInterface
{

    /**
     * Check the status of the `$account` transaction having `$ref` value
     * 
     * @param string $ref 
     * @param string $account Account that is updated by the transation (Typically the merchant platform code)
     * 
     * @return TransactionInterface 
     */
    public function checkTransaction(string $ref, string $account): TransactionInterface;
}