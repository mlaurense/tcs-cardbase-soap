<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardProperties StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CardProperties
 * @subpackage Structs
 */
class CardProperties extends AbstractStructBase
{
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomerID = null;
    /**
     * The ActivationTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ActivationTag = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The ExpireDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpireDate = null;
    /**
     * The TransactionsRemaining
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $TransactionsRemaining = null;
    /**
     * The RefillsRemaining
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $RefillsRemaining = null;
    /**
     * Constructor method for CardProperties
     * @uses CardProperties::setCustomerID()
     * @uses CardProperties::setActivationTag()
     * @uses CardProperties::setStartDate()
     * @uses CardProperties::setExpireDate()
     * @uses CardProperties::setTransactionsRemaining()
     * @uses CardProperties::setRefillsRemaining()
     * @param string $customerID
     * @param string $activationTag
     * @param string $startDate
     * @param string $expireDate
     * @param int $transactionsRemaining
     * @param int $refillsRemaining
     */
    public function __construct(?string $customerID = null, ?string $activationTag = null, ?string $startDate = null, ?string $expireDate = null, ?int $transactionsRemaining = null, ?int $refillsRemaining = null)
    {
        $this
            ->setCustomerID($customerID)
            ->setActivationTag($activationTag)
            ->setStartDate($startDate)
            ->setExpireDate($expireDate)
            ->setTransactionsRemaining($transactionsRemaining)
            ->setRefillsRemaining($refillsRemaining);
    }
    /**
     * Get CustomerID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerID(): ?string
    {
        return isset($this->CustomerID) ? $this->CustomerID : null;
    }
    /**
     * Set CustomerID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerID
     * @return \StructType\CardProperties
     */
    public function setCustomerID(?string $customerID = null): self
    {
        // validation for constraint: string
        if (!is_null($customerID) && !is_string($customerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerID, true), gettype($customerID)), __LINE__);
        }
        if (is_null($customerID) || (is_array($customerID) && empty($customerID))) {
            unset($this->CustomerID);
        } else {
            $this->CustomerID = $customerID;
        }
        
        return $this;
    }
    /**
     * Get ActivationTag value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getActivationTag(): ?string
    {
        return isset($this->ActivationTag) ? $this->ActivationTag : null;
    }
    /**
     * Set ActivationTag value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $activationTag
     * @return \StructType\CardProperties
     */
    public function setActivationTag(?string $activationTag = null): self
    {
        // validation for constraint: string
        if (!is_null($activationTag) && !is_string($activationTag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activationTag, true), gettype($activationTag)), __LINE__);
        }
        if (is_null($activationTag) || (is_array($activationTag) && empty($activationTag))) {
            unset($this->ActivationTag);
        } else {
            $this->ActivationTag = $activationTag;
        }
        
        return $this;
    }
    /**
     * Get StartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return isset($this->StartDate) ? $this->StartDate : null;
    }
    /**
     * Set StartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDate
     * @return \StructType\CardProperties
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->StartDate);
        } else {
            $this->StartDate = $startDate;
        }
        
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate(): ?string
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \StructType\CardProperties
     */
    public function setExpireDate(?string $expireDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expireDate, true), gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        
        return $this;
    }
    /**
     * Get TransactionsRemaining value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTransactionsRemaining(): ?int
    {
        return isset($this->TransactionsRemaining) ? $this->TransactionsRemaining : null;
    }
    /**
     * Set TransactionsRemaining value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $transactionsRemaining
     * @return \StructType\CardProperties
     */
    public function setTransactionsRemaining(?int $transactionsRemaining = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionsRemaining) && !(is_int($transactionsRemaining) || ctype_digit($transactionsRemaining))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionsRemaining, true), gettype($transactionsRemaining)), __LINE__);
        }
        if (is_null($transactionsRemaining) || (is_array($transactionsRemaining) && empty($transactionsRemaining))) {
            unset($this->TransactionsRemaining);
        } else {
            $this->TransactionsRemaining = $transactionsRemaining;
        }
        
        return $this;
    }
    /**
     * Get RefillsRemaining value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRefillsRemaining(): ?int
    {
        return isset($this->RefillsRemaining) ? $this->RefillsRemaining : null;
    }
    /**
     * Set RefillsRemaining value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $refillsRemaining
     * @return \StructType\CardProperties
     */
    public function setRefillsRemaining(?int $refillsRemaining = null): self
    {
        // validation for constraint: int
        if (!is_null($refillsRemaining) && !(is_int($refillsRemaining) || ctype_digit($refillsRemaining))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refillsRemaining, true), gettype($refillsRemaining)), __LINE__);
        }
        if (is_null($refillsRemaining) || (is_array($refillsRemaining) && empty($refillsRemaining))) {
            unset($this->RefillsRemaining);
        } else {
            $this->RefillsRemaining = $refillsRemaining;
        }
        
        return $this;
    }
}
