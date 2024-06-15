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


final class DebitStatusMetadata
{

	/**
	 * @var string
	 */
	private $pushStatus = null;

	/**
	 * @var string
	 */
	private $processStatus = null;

	/**
	 * Amount property [amount]
	 * 
	 * @var float
	 */
	private $amount = null;

	/**
	 * Transaction/Invoice reference property [mrchreference]
	 * 
	 * @var string
	 */
	private $txn_reference = null;

	/**
	 * Merchant provided name property [mrchname]
	 * 
	 * @var string
	 */
	private $merchant_name = null;

	/**
	 * Flooz customer id property [msisdn]
	 * 
	 * @var string
	 */
	private $customer_id = null;

	/**
	 * Merchante Invoice/Transaction payment reference property [mrorreference]
	 * 
	 * @var string
	 */
	private $source_txn_reference = null;

	/**
	 * Flooz payment reference property [referenceid]
	 * 
	 * @var string
	 */
	private $flooz_reference = null;

	/**
	 * Flooz payment date property [validationdate]
	 * 
	 * @var string
	 */
	private $date = null;

	/**
	 * Transaction result status property value [status]
	 * 
	 * @var string
	 */
	private $status = null;

	/**
	 * returns a boolean flag that indicates if push was successfully handled by flooz servers
	 * 
	 *
	 * @return bool
	 */
	public function isPushed()
	{
		# code...
	}

	/**
	 * returns a boolean flag that indicates if transaction has been successfully notified back to the server
	 * 
	 *
	 * @return bool
	 */
	public function isProcessed()
	{
		# code...
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
			'pushussd' => $this->pushStatus,
			'callback' => $this->processStatus,
			'amount' => $this->amount,
			'mrchreference' => $this->txn_reference,
			'mrchname' => $this->merchant_name,
			'msisdn' => $this->customer_id,
			'mrorreference' => $this->source_txn_reference,
			'referenceid' => $this->flooz_reference,
			'validationdate' => $this->date,
			'status' => $this->status,
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
		$self->pushStatus = $json['pushussd'] ?? null;
		$self->processStatus = $json['callback'] ?? null;
		$self->amount = $json['amount'] ?? null;
		$self->txn_reference = $json['mrchreference'] ?? null;
		$self->merchant_name = $json['mrchname'] ?? null;
		$self->customer_id = $json['msisdn'] ?? null;
		$self->source_txn_reference = $json['mrorreference'] ?? null;
		$self->flooz_reference = $json['referenceid'] ?? null;
		$self->date = $json['validationdate'] ?? null;
		$self->status = $json['status'] ?? null;
		return $self;
	}

	/**
	 * Set pushStatus property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withPushStatus(string $value)
	{
		# code...
		$self = clone $this;
		$self->pushStatus = $value;
		return $self;
	}

	/**
	 * Set processStatus property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withProcessStatus(string $value)
	{
		# code...
		$self = clone $this;
		$self->processStatus = $value;
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
	 * Set source_txn_reference property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withSourceTxnReference(string $value)
	{
		# code...
		$self = clone $this;
		$self->source_txn_reference = $value;
		return $self;
	}

	/**
	 * Set flooz_reference property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withFloozReference(string $value)
	{
		# code...
		$self = clone $this;
		$self->flooz_reference = $value;
		return $self;
	}

	/**
	 * Set date property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withDate(string $value)
	{
		# code...
		$self = clone $this;
		$self->date = $value;
		return $self;
	}

	/**
	 * Set status property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withStatus(string $value)
	{
		# code...
		$self = clone $this;
		$self->status = $value;
		return $self;
	}

	/**
	 * Get pushStatus property value
	 * 
	 *
	 * @return string
	 */
	public function getPushStatus()
	{
		# code...
		return $this->pushStatus;
	}

	/**
	 * Get processStatus property value
	 * 
	 *
	 * @return string
	 */
	public function getProcessStatus()
	{
		# code...
		return $this->processStatus;
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
	 * Get source_txn_reference property value
	 * 
	 *
	 * @return string
	 */
	public function getSourceTxnReference()
	{
		# code...
		return $this->source_txn_reference;
	}

	/**
	 * Get flooz_reference property value
	 * 
	 *
	 * @return string
	 */
	public function getFloozReference()
	{
		# code...
		return $this->flooz_reference;
	}

	/**
	 * Get date property value
	 * 
	 *
	 * @return string
	 */
	public function getDate()
	{
		# code...
		return $this->date;
	}

	/**
	 * Get status property value
	 * 
	 *
	 * @return string
	 */
	public function getStatus()
	{
		# code...
		return $this->status;
	}

}