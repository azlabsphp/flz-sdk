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
	private $push_status = null;

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
	private $order_ref = null;

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
	 * payment reference property [referenceid]
	 * 
	 * @var string
	 */
	private $payment_ref = null;

	/**
	 * payment date property [validationdate]
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
	public function isPushed(): bool
	{
		return !is_null($this->push_status) && strtoupper($this->push_status) === 'SUCCESS';
	}

	/**
	 * returns a boolean flag that indicates if transaction has been successfully notified back to the server
	 * 
	 *
	 * @return bool
	 */
	public function isProcessed(): bool
	{
		# code...
		return !is_null($this->status) && intval($this->status) === 0;
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
			'pushussd' => $this->push_status,
			'callback' => $this->processStatus,
			'amount' => $this->amount,
			'mrchreference' => $this->order_ref,
			'mrchname' => $this->merchant_name,
			'msisdn' => $this->customer_id,
			'mrorreference' => $this->source_txn_reference,
			'referenceid' => $this->payment_ref,
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
		$self->push_status = $json['pushussd'] ?? null;
		$self->processStatus = $json['callback'] ?? null;
		$self->amount = $json['amount'] ?? null;
		$self->order_ref = $json['mrchreference'] ?? null;
		$self->merchant_name = $json['mrchname'] ?? null;
		$self->customer_id = $json['msisdn'] ?? null;
		$self->source_txn_reference = $json['mrorreference'] ?? null;
		$self->payment_ref = $json['referenceid'] ?? null;
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
		$self->push_status = $value;
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
		$self->order_ref = $value;
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
		$self->payment_ref = $value;
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
		return $this->push_status;
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
		return $this->order_ref;
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
	public function getFlzReference()
	{
		# code...
		return $this->payment_ref;
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