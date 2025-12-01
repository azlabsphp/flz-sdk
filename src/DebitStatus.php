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

use Drewlabs\Flz\Contracts\Jsonnable;

final class DebitStatus implements Jsonnable
{

	/**
	 * Merchant invoice/transaction reference property [mrchrefid]
	 * 
	 * @var string
	 */
	private $reference = null;

	/**
	 * Merchant provided msisdn property [partnermsisdn]
	 * 
	 * @var string
	 */
	private $merchant_id = null;

	/**
	 * class factory constructor
	 * 
	 * @return DebitStatus 
	 */
	public static function new()
	{
		return new DebitStatus;
	}

	/**
	 * Returns a dictionnary/hash map representation of the current instance
	 * 
	 *
	 * @return array|mixed
	 */
	public function toJson()
	{
		# code...
		return [
			'mrchrefid' => $this->reference,
			'partnermsisdn' => $this->merchant_id,
		];
	}

	/**
	 * Initialize class instance and properties from a dictionnary/hash map
	 * 
	 * @param array $json
	 */
	public static function fromJson(array $json = [ ])
	{
		# code...
		$self = new static;
		$self->reference = $json['mrchrefid'] ?? null;
		$self->merchant_id = $json['partnermsisdn'] ?? null;
		return $self;
	}

	/**
	 * Set reference property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withReference(string $value)
	{
		# code...
		$self = clone $this;
		$self->reference = $value;
		return $self;
	}

	/**
	 * Set merchant_id property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withMerchantId(string $value)
	{
		# code...
		$self = clone $this;
		$self->merchant_id = $value;
		return $self;
	}

	/**
	 * Get reference property value
	 * 
	 *
	 * @return string
	 */
	public function getReference()
	{
		# code...
		return $this->reference;
	}

	/**
	 * Get merchant_id property value
	 * 
	 *
	 * @return string
	 */
	public function getMerchantId()
	{
		# code...
		return $this->merchant_id;
	}

}