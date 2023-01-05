<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidActivateRequest StructType
 * @subpackage Structs
 */
class VoidActivateRequest extends AbstractStructBase
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
     * The Receiptnumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Receiptnumber = null;
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
     * Constructor method for VoidActivateRequest
     * @uses VoidActivateRequest::setCard()
     * @uses VoidActivateRequest::setValue()
     * @uses VoidActivateRequest::setReceiptnumber()
     * @uses VoidActivateRequest::setRemark()
     * @uses VoidActivateRequest::setTransactionTag()
     * @param \StructType\CardIdentifier $card
     * @param \StructType\Money $value
     * @param string $receiptnumber
     * @param string $remark
     * @param string $transactionTag
     */
    public function __construct(\StructType\CardIdentifier $card, \StructType\Money $value, ?string $receiptnumber = null, ?string $remark = null, ?string $transactionTag = null)
    {
        $this
            ->setCard($card)
            ->setValue($value)
            ->setReceiptnumber($receiptnumber)
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
     * @return \StructType\VoidActivateRequest
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
     * @return \StructType\VoidActivateRequest
     */
    public function setValue(\StructType\Money $value): self
    {
        $this->Value = $value;
        
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
     * @return \StructType\VoidActivateRequest
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
     * @return \StructType\VoidActivateRequest
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
     * @return \StructType\VoidActivateRequest
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
