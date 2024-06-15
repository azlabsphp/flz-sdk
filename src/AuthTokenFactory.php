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


final class AuthTokenFactory
{

	/** @var string */
	private $key;

	/**
	 * Creates new class instance
	 * 
	 * @param string $key
	 * 
	 * @return void
	 */
	public function __construct(string $key)
	{
		$this->key = $key;
	}

	/**
	 * Creates Authorization token for sending request to flooz endpoint
	 * 
	 * @param string $user
	 * @param string $password
	 * @param int $counter
	 *
	 * @return string
	 */
	public function createToken(string $user, string $password, int $counter = 16)
	{
		$counter = $counter ?? 16;
		$iv = openssl_random_pseudo_bytes($counter, $crypto_strong);
		$cipher = openssl_encrypt(sprintf("%d:%s:%s", $counter, $user, $password), 'aes-256-cbc', $this->key, OPENSSL_RAW_DATA, $iv);
		// TODO: Maybe initialization vector should not be added
		return base64_encode($iv) . ':' . base64_encode($cipher);
	}
}
