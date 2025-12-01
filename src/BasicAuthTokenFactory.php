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

final class BasicAuthTokenFactory implements TokenFactoryInterface
{

	/** @var string */
	private $key;

	/** encryption round length */
	private $counter = 16;

	/** authentication user name */
	private $user;

	/** authentication user password */
	private $password;

	/**
	 * creates basic auth class token factory class instance
	 * 
	 * @param string $user 
	 * @param string $password 
	 * @param string $key 
	 */
	public function __construct(string $user, string $password, string $key)
	{
		$this->key = $key;
		$this->user = $user;
		$this->password = $password;
	}
	
	public function createToken(): string
	{
		$counter = $this->counter ?? 16;
		$iv = openssl_random_pseudo_bytes($counter, $crypto_strong);
		$cipher = openssl_encrypt(sprintf("%d:%s:%s", $counter, $this->user, $this->password), 'aes-256-cbc', $this->key, OPENSSL_RAW_DATA, $iv);
		return base64_encode($iv) . ':' . base64_encode($cipher);
	}
}
