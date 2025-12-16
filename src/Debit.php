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

final class Debit implements Jsonnable
{

	/**
	 * moov money customer id property [msisdn]
	 * 
	 * @var string
	 */
	private $customer_id = null;

	/**
	 * Merchant invoice/transaction reference property [mrchrefid]
	 * 
	 * @var string
	 */
	private $txn_reference = null;

	/**
	 * Merchant provided transaction key property [key]
	 * 
	 * @var string
	 */
	private $merchant_key = null;

	/**
	 * Merchant provided name property [mrchname]
	 * 
	 * @var string
	 */
	private $merchant_name = null;

	/**
	 * Merchant provided msisdn property [partnermsisdn]
	 * 
	 * @var string
	 */
	private $merchant_id = null;

	/**
	 * Transaction/Invoice amount property [amount]
	 * 
	 * @var float
	 */
	private $amount = null;


	/**
	 * Factory function to create a new debit instance
	 * 
	 * @return self 
	 */
	public static function new(): self
	{
		return new Debit;
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
			'msisdn' => $this->customer_id,
			'mrchrefid' => $this->txn_reference,
			'key' => $this->merchant_key,
			'mrchname' => $this->merchant_name,
			'partnermsisdn' => $this->merchant_id,
			'amount' => $this->amount,
		];
	}

	/**
	 * Initialize class instance and properties from a dictionnary/hash map
	 * 
	 * @param array $json
	 */
	public static function fromJson(array $json = [])
	{
		# code...
		$self = new static;
		$self->customer_id = $json['msisdn'] ?? null;
		$self->txn_reference = $json['mrchrefid'] ?? null;
		$self->merchant_key = $json['key'] ?? null;
		$self->merchant_name = $json['mrchname'] ?? null;
		$self->merchant_id = $json['partnermsisdn'] ?? null;
		$self->amount = $json['amount'] ?? null;
		return $self;
	}

	/**
	 * Set customer_id property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withCustomerId(string $value)
	{
		# code...
		$self = clone $this;
		$self->customer_id = $value;
		return $self;
	}

	/**
	 * Set txn_reference property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withTxnReference(string $value)
	{
		# code...
		$self = clone $this;
		$self->txn_reference = $value;
		return $self;
	}

	/**
	 * Set merchant_key property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withMerchantKey(string $value)
	{
		# code...
		$self = clone $this;
		$self->merchant_key = $value;
		return $self;
	}

	/**
	 * Set merchant_name property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withMerchantName(string $value)
	{
		# code...
		$self = clone $this;
		$self->merchant_name = $value;
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
	 * Set amount property value
	 * 
	 * @param float $value
	 *
	 * @return self
	 */
	public function withAmount(float $value)
	{
		# code...
		$self = clone $this;
		$self->amount = $value;
		return $self;
	}

	/**
	 * Get customer_id property value
	 * 
	 *
	 * @return string
	 */
	public function getCustomerId()
	{
		# code...
		return $this->customer_id;
	}

	/**
	 * Get txn_reference property value
	 * 
	 *
	 * @return string
	 */
	public function getTxnReference()
	{
		# code...
		return $this->txn_reference;
	}

	/**
	 * Get merchant_key property value
	 * 
	 *
	 * @return string
	 */
	public function getMerchantKey()
	{
		# code...
		return $this->merchant_key;
	}

	/**
	 * Get merchant_name property value
	 * 
	 *
	 * @return string
	 */
	public function getMerchantName()
	{
		# code...
		return $this->merchant_name;
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

	/**
	 * Get amount property value
	 * 
	 *
	 * @return float
	 */
	public function getAmount()
	{
		# code...
		return $this->amount;
	}
}
