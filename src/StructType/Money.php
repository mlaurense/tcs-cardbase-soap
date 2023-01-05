<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Money StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Money
 * @subpackage Structs
 */
class Money extends AbstractStructBase
{
    /**
     * The Amount
     * @var int|null
     */
    protected ?int $Amount = null;
    /**
     * The Currency
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * Constructor method for Money
     * @uses Money::setAmount()
     * @uses Money::setCurrency()
     * @param int $amount
     * @param string $currency
     */
    public function __construct(?int $amount = null, ?string $currency = null)
    {
        $this
            ->setAmount($amount)
            ->setCurrency($currency);
    }
    /**
     * Get Amount value
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param int $amount
     * @return \StructType\Money
     */
    public function setAmount(?int $amount = null): self
    {
        // validation for constraint: int
        if (!is_null($amount) && !(is_int($amount) || ctype_digit($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \EnumType\Currency::valueIsValid()
     * @uses \EnumType\Currency::getValidValues()
     * @throws InvalidArgumentException
     * @param string $currency
     * @return \StructType\Money
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Currency::valueIsValid($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Currency', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \EnumType\Currency::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
}
