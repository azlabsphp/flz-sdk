<?php

declare(strict_types=1);

/*
 * This file is auto generated using the drewlabs/mdl UML model class generator package
 *
 * (c) Sidoine Azandrew <contact@liksoft.tg>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Drewlabs\Flz;

use Drewlabs\Flz\Contracts\TokenFactoryInterface;

final class ApiKeyTokenFactory implements TokenFactoryInterface
{

	/** @var string */
	private $value;

	/**
	 * Creates new class instance
	 * 
	 * @param string $value
	 * 
	 * @return void
	 */
	public function __construct(string $value)
	{
		$this->value = $value;
	}


	/**
	 * returns the api authorization key
	 * 
	 * @return string 
	 */
	public function getApiKey()
	{
		return $this->value;
	}

	/**
	 * creates authorization token for sending request to flooz endpoint
	 *
	 * @return string
	 */
	public function createToken(): string
	{
		return $this->value;
	}
}
