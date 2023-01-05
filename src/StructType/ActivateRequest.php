<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivateRequest StructType
 * @subpackage Structs
 */
class ActivateRequest extends AbstractStructBase
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
     * The CustomerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomerID = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The Receiptnumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Receiptnumber = null;
    /**
     * The CreditcardPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $CreditcardPayment = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Remark = null;
    /**
     * The TransactionTag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TransactionTag = null;
    /**
     * Constructor method for ActivateRequest
     * @uses ActivateRequest::setCard()
     * @uses ActivateRequest::setValue()
     * @uses ActivateRequest::setEAN()
     * @uses ActivateRequest::setCustomerID()
     * @uses ActivateRequest::setStartDate()
     * @uses ActivateRequest::setReceiptnumber()
     * @uses ActivateRequest::setCreditcardPayment()
     * @uses ActivateRequest::setRemark()
     * @uses ActivateRequest::setTransactionTag()
     * @param \StructType\CardIdentifier $card
     * @param \StructType\Money $value
     * @param string $eAN
     * @param string $customerID
     * @param string $startDate
     * @param string $receiptnumber
     * @param bool $creditcardPayment
     * @param string $remark
     * @param string $transactionTag
     */
    public function __construct(\StructType\CardIdentifier $card, \StructType\Money $value, ?string $eAN = null, ?string $customerID = null, ?string $startDate = null, ?string $receiptnumber = null, ?bool $creditcardPayment = null, ?string $remark = null, ?string $transactionTag = null)
    {
        $this
            ->setCard($card)
            ->setValue($value)
            ->setEAN($eAN)
            ->setCustomerID($customerID)
            ->setStartDate($startDate)
            ->setReceiptnumber($receiptnumber)
            ->setCreditcardPayment($creditcardPayment)
            ->setRemark($remark)
            ->setTransactionTag($transactionTag);
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
     * @return \StructType\ActivateRequest
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
     * @return \StructType\ActivateRequest
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
     * @return \StructType\ActivateRequest
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
     * @return \StructType\ActivateRequest
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
     * @return \StructType\ActivateRequest
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
     * Get Receiptnumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceiptnumber(): ?string
    {
        return isset($this->Receiptnumber) ? $this->Receiptnumber : null;
    }
    /**
     * Set Receiptnumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receiptnumber
     * @return \StructType\ActivateRequest
     */
    public function setReceiptnumber(?string $receiptnumber = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptnumber) && !is_string($receiptnumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptnumber, true), gettype($receiptnumber)), __LINE__);
        }
        if (is_null($receiptnumber) || (is_array($receiptnumber) && empty($receiptnumber))) {
            unset($this->Receiptnumber);
        } else {
            $this->Receiptnumber = $receiptnumber;
        }
        
        return $this;
    }
    /**
     * Get CreditcardPayment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getCreditcardPayment(): ?bool
    {
        return isset($this->CreditcardPayment) ? $this->CreditcardPayment : null;
    }
    /**
     * Set CreditcardPayment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $creditcardPayment
     * @return \StructType\ActivateRequest
     */
    public function setCreditcardPayment(?bool $creditcardPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($creditcardPayment) && !is_bool($creditcardPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($creditcardPayment, true), gettype($creditcardPayment)), __LINE__);
        }
        if (is_null($creditcardPayment) || (is_array($creditcardPayment) && empty($creditcardPayment))) {
            unset($this->CreditcardPayment);
        } else {
            $this->CreditcardPayment = $creditcardPayment;
        }
        
        return $this;
    }
    /**
     * Get Remark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return isset($this->Remark) ? $this->Remark : null;
    }
    /**
     * Set Remark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $remark
     * @return \StructType\ActivateRequest
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        if (is_null($remark) || (is_array($remark) && empty($remark))) {
            unset($this->Remark);
        } else {
            $this->Remark = $remark;
        }
        
        return $this;
    }
    /**
     * Get TransactionTag value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransactionTag(): ?string
    {
        return isset($this->TransactionTag) ? $this->TransactionTag : null;
    }
    /**
     * Set TransactionTag value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transactionTag
     * @return \StructType\ActivateRequest
     */
    public function setTransactionTag(?string $transactionTag = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionTag) && !is_string($transactionTag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionTag, true), gettype($transactionTag)), __LINE__);
        }
        if (is_null($transactionTag) || (is_array($transactionTag) && empty($transactionTag))) {
            unset($this->TransactionTag);
        } else {
            $this->TransactionTag = $transactionTag;
        }
        
        return $this;
    }
}
