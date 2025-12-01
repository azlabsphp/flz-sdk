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

final class Flooz
{

	/**
	 * creates a new flooz debit API client instance
	 * 
	 * @param string $endpoint
	 * @param TokenFactoryInterface $token
	 *
	 * @return DebitAPI
	 */
	public static function NewDebit(string $endpoint, TokenFactoryInterface $token): DebitAPI
	{
		return new DebitAPI($endpoint, $token);
	}

}