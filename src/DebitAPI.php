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
use Drewlabs\Flz\Contracts\Jsonnable;
use Drewlabs\Flz\Contracts\RequestClientInterface;
use Drewlabs\Flz\Contracts\ResponseInterface;
use Drewlabs\Flz\Contracts\TokenFactoryInterface;
use Drewlabs\Flz\Exceptions\RequestException;

final class DebitAPI implements RequestClientInterface
{

	use SendsHTTPRequest;

	/**
	 * authorization token factory
	 * 
	 * @var TokenFactoryInterface
	 */
	private $tokenFactory = null;

	/** @var string */
	private $endpoint;

	/**
	 * Creates new class instance
	 * 
	 * @param string $endpoint
	 * @param string $token
	 *
	 * @return void
	 */
	public function __construct(string $endpoint, TokenFactoryInterface $tokenFactory)
	{
		# code...
		$this->tokenFactory = $tokenFactory;
		$this->endpoint = $endpoint;
	}

	public function sendRequest(Jsonnable $req): ResponseInterface
	{
		$response = $this->sendHTTPRequest( new Curl, sprintf("%s/payment/HttpService/json/cv/debit", rtrim($this->endpoint, '/')), 'POST', $req->toJson(), [
			'content-type' => 'application/json',
			'authorization' => sprintf('%s', $this->tokenFactory->createToken())
		]);
		if (($statusCode  = $response->getStatusCode()) && (200 > $statusCode || 204 < $statusCode)) {
			throw new RequestException(sprintf("/POST payment/HttpService/json/cv/debit fails with status %d -  %s", $statusCode, $response->getBody()));
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
		$response = $this->sendHTTPRequest(new Curl, sprintf("%s/payment/HttpService/json/cv/Verify", rtrim($this->endpoint, '/')), 'POST', $req->toJson(), [
			'content-type' => 'application/json',
			'authorization' => sprintf('%s', $this->tokenFactory->createToken())
		]);
		if (($statusCode  = $response->getStatusCode()) && (200 > $statusCode || 204 < $statusCode)) {
			throw new RequestException(sprintf("/POST payment/HttpService/json/cv/Verify fails with status %d - %s", $statusCode, $response->getBody()));
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
		return $this->checkStatus(DebitStatus::new()->withReference($p->getTxnReference())->withMerchantId($merchant));
	}
}
