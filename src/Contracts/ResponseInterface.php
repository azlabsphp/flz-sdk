<?php

namespace Drewlabs\Flz\Contracts;

interface ResponseInterface
{
	/**
	 * boolean flag which indicates that the request completed successfully
	 * 
	 *
	 * @return bool
	 */
	public function isOk(): bool;


	/**
	 * returns the response status description
	 * 
	 * @return string 
	 */
	public function getReasonPhrase(): string;
}
