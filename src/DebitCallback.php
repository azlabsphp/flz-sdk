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


final class DebitCallback
{

	/**
	 * Invoice/Transaction amount property value [amount]
	 * 
	 * @var float
	 */
	private $amount = null;

	/**
	 * moov money payment reference property value [refid]
	 * 
	 * @var string
	 */
	private $payment_ref = null;

	/**
	 * Transaction/Invoice reference property [mrchrefid]
	 * 
	 * @var string
	 */
	private $txn_reference = null;

	/**
	 * moov money customer id property [msisdn]
	 * 
	 * @var string
	 */
	private $customer_id = null;

	/**
	 * Callback status property value [status]
	 * 
	 * @var string
	 */
	private $status = null;

	/**
	 * Callback message property value [message]
	 * 
	 * @var string
	 */
	private $message = null;

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
			'amount' => $this->amount,
			'refid' => $this->payment_ref,
			'mrchrefid' => $this->txn_reference,
			'msisdn' => $this->customer_id,
			'status' => $this->status,
			'message' => $this->message,
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
		$self->amount = $json['amount'] ?? null;
		$self->payment_ref = $json['refid'] ?? null;
		$self->txn_reference = $json['mrchrefid'] ?? null;
		$self->customer_id = $json['msisdn'] ?? null;
		$self->status = $json['status'] ?? null;
		$self->message = $json['message'] ?? null;
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
	 * Set payment_ref property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withPaymentRef(string $value)
	{
		# code...
		$self = clone $this;
		$self->payment_ref = $value;
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
	 * Set message property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withMessage(string $value)
	{
		# code...
		$self = clone $this;
		$self->message = $value;
		return $self;
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
	 * Get payment_ref property value
	 * 
	 *
	 * @return string
	 */
	public function getPaymentRef()
	{
		# code...
		return $this->payment_ref;
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

	/**
	 * Get message property value
	 * 
	 *
	 * @return string
	 */
	public function getMessage()
	{
		# code...
		return $this->message;
	}

}