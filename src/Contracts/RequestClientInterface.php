<?php

namespace Drewlabs\Flz\Contracts;

use Drewlabs\Flz\Exceptions\RequestException;

interface RequestClientInterface
{
    /**
     * Sends request to platform backend server
     * 
	 * @param Jsonnable $req
	 *
	 * @return ResponseInterface
	 *
	 * @throws RequestException
	 */
	public function sendRequest(Jsonnable $req): ResponseInterface;

}