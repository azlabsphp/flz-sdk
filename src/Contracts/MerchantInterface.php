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

namespace Drewlabs\Flz\Contracts;

interface MerchantInterface
{
    /**
     * returns merchant wallet address property value. Usually merchant address is
     * the phone number attributed by flz platform to the merchant
     * 
     * @return string 
     */
    public function getAddress(): string;

    /**
     * returns merchant name property value
     * 
     * @return string 
     */
    public function getName(): string;

    /**
     * returns merchange unique human readable code
     * 
     * @return string 
     */
    public function getCode(): string;
}