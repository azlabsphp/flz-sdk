<?php 

declare(strict_types=1);

namespace Drewlabs\Flz;

use AddressInfo;
use Drewlabs\Flz\Contracts\MerchantInterface;

class Merchant implements MerchantInterface
{

    /** @var string  */
    private $address;

    /** @var string  */
    private $code;

    /** @var string  */
    private $name;

    public function __construct(string $address, string $code, string $name)
    {
        $this->address = $address;
        $this->code = $code;
        $this->name = $name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCode(): string
    {
        return $this->code;
    }

}