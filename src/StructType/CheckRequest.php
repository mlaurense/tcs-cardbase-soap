<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckRequest StructType
 * @subpackage Structs
 */
class CheckRequest extends AbstractStructBase
{
    /**
     * The Card
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\CardIdentifier
     */
    protected \StructType\CardIdentifier $Card;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\Money
     */
    protected \StructType\Money $Value;
    /**
     * The EAN
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EAN = null;
    /**
     * Constructor method for CheckRequest
     * @uses CheckRequest::setCard()
     * @uses CheckRequest::setValue()
     * @uses CheckRequest::setEAN()
     * @param \StructType\CardIdentifier $card
     * @param \StructType\Money $value
     * @param string $eAN
     */
    public function __construct(\StructType\CardIdentifier $card, \StructType\Money $value, ?string $eAN = null)
    {
        $this
            ->setCard($card)
            ->setValue($value)
            ->setEAN($eAN);
    }
    /**
     * Get Card value
     * @return \StructType\CardIdentifier
     */
    public function getCard(): \StructType\CardIdentifier
    {
        return $this->Card;
    }
    /**
     * Set Card value
     * @param \StructType\CardIdentifier $card
     * @return \StructType\CheckRequest
     */
    public function setCard(\StructType\CardIdentifier $card): self
    {
        $this->Card = $card;
        
        return $this;
    }
    /**
     * Get Value value
     * @return \StructType\Money
     */
    public function getValue(): \StructType\Money
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \StructType\Money $value
     * @return \StructType\CheckRequest
     */
    public function setValue(\StructType\Money $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get EAN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEAN(): ?string
    {
        return isset($this->EAN) ? $this->EAN : null;
    }
    /**
     * Set EAN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eAN
     * @return \StructType\CheckRequest
     */
    public function setEAN(?string $eAN = null): self
    {
        // validation for constraint: string
        if (!is_null($eAN) && !is_string($eAN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eAN, true), gettype($eAN)), __LINE__);
        }
        if (is_null($eAN) || (is_array($eAN) && empty($eAN))) {
            unset($this->EAN);
        } else {
            $this->EAN = $eAN;
        }
        
        return $this;
    }
}
