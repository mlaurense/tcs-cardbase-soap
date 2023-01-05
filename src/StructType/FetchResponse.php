<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FetchResponse StructType
 * @subpackage Structs
 */
class FetchResponse extends AbstractStructBase
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
     * The VerificationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VerificationCode = null;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * Constructor method for FetchResponse
     * @uses FetchResponse::setCard()
     * @uses FetchResponse::setVerificationCode()
     * @uses FetchResponse::setCount()
     * @uses FetchResponse::setTransactionID()
     * @param \StructType\Card $card
     * @param string $verificationCode
     * @param int $count
     * @param string $transactionID
     */
    public function __construct(?\StructType\Card $card = null, ?string $verificationCode = null, ?int $count = null, ?string $transactionID = null)
    {
        $this
            ->setCard($card)
            ->setVerificationCode($verificationCode)
            ->setCount($count)
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
     * @return \StructType\FetchResponse
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
     * Get VerificationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVerificationCode(): ?string
    {
        return isset($this->VerificationCode) ? $this->VerificationCode : null;
    }
    /**
     * Set VerificationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $verificationCode
     * @return \StructType\FetchResponse
     */
    public function setVerificationCode(?string $verificationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($verificationCode) && !is_string($verificationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verificationCode, true), gettype($verificationCode)), __LINE__);
        }
        if (is_null($verificationCode) || (is_array($verificationCode) && empty($verificationCode))) {
            unset($this->VerificationCode);
        } else {
            $this->VerificationCode = $verificationCode;
        }
        
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
     * @return \StructType\FetchResponse
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
     * @return \StructType\FetchResponse
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
