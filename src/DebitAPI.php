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

use Drewlabs\Flz\Traits\SendsHTTPRequest;
use Drewlabs\Curl\Client as Curl;
use Drewlabs\Flz\Exceptions\RequestException;

final class DebitAPI
{

	use SendsHTTPRequest;

	/**
	 * Debit API endpoint request authorization token
	 * 
	 * @var string
	 */
	private $token = null;

	/** @var Curl */
	private $curl;

	/**
	 * Creates new class instance
	 * 
	 * @param string $endpoint
	 * @param string $token
	 *
	 * @return void
	 */
	public function __construct(string $endpoint, ?string $token = null)
	{
		# code...
		$this->token = $token;
		$this->curl = new Curl(rtrim($endpoint, '/'));
	}

	/**
	 * @param Debit $req
	 *
	 * @return DebitResult
	 *
	 * @throws RequestException
	 */
	public function sendRequest(Debit $req): DebitResult
	{
		$response = $this->sendHTTPRequest($this->curl, 'Flooz/DebitService/Debit', 'POST', $req->toJson(), [
			'Content-Type' => 'application/json',
			'Authorization' => sprintf('%s', $this->token)
		]);
		if (($statusCode  = $response->getStatusCode()) && (200 > $statusCode || 204 < $statusCode)) {
			throw new RequestException(sprintf("/POST Flooz/DebitService/Debit fails with status %d -  %s", $statusCode, $response->getBody()));
		}
		return DebitResult::fromJson($response->json()->getBody());
	}

	/**
	 * @param DebitStatus $req
	 *
	 * @return DebitStatusResult
	 */
	public function checkStatus(DebitStatus $req): DebitStatusResult
	{
		$response = $this->sendHTTPRequest($this->curl, 'Flooz/DebitService/Verify', 'POST', $req->toJson(), [
			'Content-Type' => 'application/json',
			'Authorization' => sprintf('%s', $this->token)
		]);
		if (($statusCode  = $response->getStatusCode()) && (200 > $statusCode || 204 < $statusCode)) {
			throw new RequestException(sprintf("/POST Flooz/DebitService/Verify fails with status %d - %s", $statusCode, $response->getBody()));
		}
		return DebitStatusResult::fromJson($response->json()->getBody());
	}

	/**
	 * @param DebitCallback $p
	 *
	 * @return DebitStatusResult
	 */
	public function handleCallback(DebitCallback $p, string $merchant): DebitStatusResult
	{
		// When a callback is received, we send a request to get transaction status
		$req = new DebitStatus;
		return $this->checkStatus($req->withReference($p->getTxnReference())->withMerchantId($merchant));
	}
}
