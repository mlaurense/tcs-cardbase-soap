<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionHistoryRequest StructType
 * @subpackage Structs
 */
class TransactionHistoryRequest extends AbstractStructBase
{
    /**
     * The Card
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\CardIdentifier
     */
    protected \StructType\CardIdentifier $Card;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * Constructor method for TransactionHistoryRequest
     * @uses TransactionHistoryRequest::setCard()
     * @uses TransactionHistoryRequest::setCount()
     * @param \StructType\CardIdentifier $card
     * @param int $count
     */
    public function __construct(\StructType\CardIdentifier $card, ?int $count = null)
    {
        $this
            ->setCard($card)
            ->setCount($count);
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
     * @return \StructType\TransactionHistoryRequest
     */
    public function setCard(\StructType\CardIdentifier $card): self
    {
        $this->Card = $card;
        
        return $this;
    }
    /**
     * Get Count value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCount(): ?int
    {
        return isset($this->Count) ? $this->Count : null;
    }
    /**
     * Set Count value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $count
     * @return \StructType\TransactionHistoryRequest
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        if (is_null($count) || (is_array($count) && empty($count))) {
            unset($this->Count);
        } else {
            $this->Count = $count;
        }
        
        return $this;
    }
}
