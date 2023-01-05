<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivateResponse StructType
 * @subpackage Structs
 */
class ActivateResponse extends AbstractStructBase
{
    /**
     * The Card
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Card|null
     */
    protected ?\StructType\Card $Card = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * Constructor method for ActivateResponse
     * @uses ActivateResponse::setCard()
     * @uses ActivateResponse::setTransactionID()
     * @param \StructType\Card $card
     * @param string $transactionID
     */
    public function __construct(?\StructType\Card $card = null, ?string $transactionID = null)
    {
        $this
            ->setCard($card)
            ->setTransactionID($transactionID);
    }
    /**
     * Get Card value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Card|null
     */
    public function getCard(): ?\StructType\Card
    {
        return isset($this->Card) ? $this->Card : null;
    }
    /**
     * Set Card value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Card $card
     * @return \StructType\ActivateResponse
     */
    public function setCard(?\StructType\Card $card = null): self
    {
        if (is_null($card) || (is_array($card) && empty($card))) {
            unset($this->Card);
        } else {
            $this->Card = $card;
        }
        
        return $this;
    }
    /**
     * Get TransactionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return isset($this->TransactionID) ? $this->TransactionID : null;
    }
    /**
     * Set TransactionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transactionID
     * @return \StructType\ActivateResponse
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        if (is_null($transactionID) || (is_array($transactionID) && empty($transactionID))) {
            unset($this->TransactionID);
        } else {
            $this->TransactionID = $transactionID;
        }
        
        return $this;
    }
}
