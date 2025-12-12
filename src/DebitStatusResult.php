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

use Drewlabs\Flz\Contracts\TransactionInterface;

final class DebitStatusResult implements TransactionInterface
{

	/**
	 * Debit status result message property value [message]
	 * 
	 * @var string
	 */
	private $message = null;

	/**
	 * Debit status result status property value [status]
	 * 
	 * @var string
	 */
	private $status = null;

	/**
	 * Debit status result metadata property value [details]
	 * 
	 * @var DebitStatusMetadata
	 */
	private $metadata = null;

	public function isProcessed(): bool
	{
		return $this->metadata && $this->metadata->isProcessed();
	}

	public function getPaymentRef(): ?string
	{
		return $this->metadata ? $this->metadata->getFlzReference() : null;
	}

	public function getOrderRef(): ?string
	{
		return $this->metadata ? $this->metadata->getTxnReference() : null;
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
			'message' => $this->message,
			'status' => $this->status,
			'details' => $this->metadata,
		];
	}

	/**
	 * Initialize class instance and properties from a dictionnary/hash map
	 * 
	 * @param mixed $json
	 */
	public static function fromJson(array $json = []): static
	{
		# code...
		$self = new static;
		$self->message = $json['message'] ?? null;
		$self->status = $json['status'] ?? null;
		$self->metadata = DebitStatusMetadata::fromJson($json['details'] ?? []);

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
	 * Set metadata property value
	 * 
	 * @param DebitStatusMetadata $value
	 *
	 * @return self
	 */
	public function withMetadata(DebitStatusMetadata $value)
	{
		# code...
		$self = clone $this;
		$self->metadata = $value;
		return $self;
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
	 * Get metadata property value
	 * 
	 *
	 * @return DebitStatusMetadata
	 */
	public function getMetadata()
	{
		# code...
		return $this->metadata;
	}
}
