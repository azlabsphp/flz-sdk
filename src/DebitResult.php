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

use Drewlabs\Flz\Contracts\ResponseInterface;

final class DebitResult implements ResponseInterface
{

	/**
	 * Transaction result description property value [description]
	 * 
	 * @var string
	 */
	private $description = null;

	/**
	 * Transaction result message property value [message]
	 * 
	 * @var string
	 */
	private $message = null;

	/**
	 * Transaction result reference property value [mrorrefid]
	 * 
	 * @var string
	 */
	private $reference = null;

	/**
	 * Transaction result status property value [status]
	 * 
	 * @var string
	 */
	private $status = null;


	public function isOk(): bool
	{
		return in_array(intval($this->status), [0, ]);
	}

	public function getReasonPhrase(): string
	{
		return $this->message ?? 'Unknown error';
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
			'description' => $this->description,
			'message' => $this->message,
			'mrorrefid' => $this->reference,
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
		$self->description = $json['description'] ?? null;
		$self->message = $json['message'] ?? static::getMessageByStatus($json['status'] ?? null);
		$self->reference = $json['mrorrefid'] ?? null;
		$self->status = $json['status'] ?? null;
		return $self;
	}

	/**
	 * Set description property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function withDescription(string $value)
	{
		# code...
		$self = clone $this;
		$self->description = $value;
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
	 * Get description property value
	 * 
	 *
	 * @return string
	 */
	public function getDescription()
	{
		# code...
		return $this->description;
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
	 * resolve message using status code in the response
	 * 
	 * @param null|string $status
	 * 
	 * @return string
	 */
	private static function getMessageByStatus(?string $status) 
	{
		return DebitResultCodes::getMessage($status);
	}

}