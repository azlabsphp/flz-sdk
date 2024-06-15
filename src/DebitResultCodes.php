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


final class DebitResultCodes
{

	/** @var array<string,string> */
	const RESULT_CODES = [
		'0' => 'Transaction is being processed',
		'1' => 'Incomplete request',
		'3' => 'Invalid request',
		'4' => 'Reference already used',
		'8' => 'Pending push payment found',
		'9' => 'Pending validation payment found',
		'5' => 'Not allowed transaction',
		'10' => 'Failed transaction',
		'100' => 'Failed',
		'99' => 'Invalid authorization'
	];

	/**
	 * returns the message matching provided result code
	 * 
	 * @param string $code
	 *
	 * @return string
	 */
	public static function getMessage(string $code): string
	{
		return static::RESULT_CODES[$code] ?? 'Unknown';
	}

}