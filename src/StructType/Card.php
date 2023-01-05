<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Card StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Card
 * @subpackage Structs
 */
class Card extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Money|null
     */
    protected ?\StructType\Money $Value = null;
    /**
     * The Details
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CardProperties|null
     */
    protected ?\StructType\CardProperties $Details = null;
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Product|null
     */
    protected ?\StructType\Product $Product = null;
    /**
     * Constructor method for Card
     * @uses Card::setNumber()
     * @uses Card::setStatus()
     * @uses Card::setValue()
     * @uses Card::setDetails()
     * @uses Card::setProduct()
     * @param string $number
     * @param string $status
     * @param \StructType\Money $value
     * @param \StructType\CardProperties $details
     * @param \StructType\Product $product
     */
    public function __construct(?string $number = null, ?string $status = null, ?\StructType\Money $value = null, ?\StructType\CardProperties $details = null, ?\StructType\Product $product = null)
    {
        $this
            ->setNumber($number)
            ->setStatus($status)
            ->setValue($value)
            ->setDetails($details)
            ->setProduct($product);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \StructType\Card
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\CardStatus::valueIsValid()
     * @uses \EnumType\CardStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \StructType\Card
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\CardStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CardStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\CardStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Value value
     * @return \StructType\Money|null
     */
    public function getValue(): ?\StructType\Money
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \StructType\Money $value
     * @return \StructType\Card
     */
    public function setValue(?\StructType\Money $value = null): self
    {
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CardProperties|null
     */
    public function getDetails(): ?\StructType\CardProperties
    {
        return isset($this->Details) ? $this->Details : null;
    }
    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CardProperties $details
     * @return \StructType\Card
     */
    public function setDetails(?\StructType\CardProperties $details = null): self
    {
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->Details);
        } else {
            $this->Details = $details;
        }
        
        return $this;
    }
    /**
     * Get Product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Product|null
     */
    public function getProduct(): ?\StructType\Product
    {
        return isset($this->Product) ? $this->Product : null;
    }
    /**
     * Set Product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Product $product
     * @return \StructType\Card
     */
    public function setProduct(?\StructType\Product $product = null): self
    {
        if (is_null($product) || (is_array($product) && empty($product))) {
            unset($this->Product);
        } else {
            $this->Product = $product;
        }
        
        return $this;
    }
}
