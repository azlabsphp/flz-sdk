<?php

namespace Drewlabs\Flz\Contracts;

interface TokenFactoryInterface
{

    /**
     * creates authorization token for sending requests to flz endpoint
     * 
     * @return string
     */
    public function createToken(): string;
}
