<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Transaction
 * @subpackage Structs
 */
class Transaction extends AbstractStructBase
{
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The Command
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Command = null;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The Retailername
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Retailername = null;
    /**
     * The RetailerAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RetailerAddress = null;
    /**
     * The RetailerPostalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RetailerPostalCode = null;
    /**
     * The RetailerCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RetailerCity = null;
    /**
     * The Tag
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Tag = null;
    /**
     * Constructor method for Transaction
     * @uses Transaction::setTransactionID()
     * @uses Transaction::setCommand()
     * @uses Transaction::setDate()
     * @uses Transaction::setCurrency()
     * @uses Transaction::setAmount()
     * @uses Transaction::setRetailername()
     * @uses Transaction::setRetailerAddress()
     * @uses Transaction::setRetailerPostalCode()
     * @uses Transaction::setRetailerCity()
     * @uses Transaction::setTag()
     * @param string $transactionID
     * @param string $command
     * @param string $date
     * @param string $currency
     * @param string $amount
     * @param string $retailername
     * @param string $retailerAddress
     * @param string $retailerPostalCode
     * @param string $retailerCity
     * @param string $tag
     */
    public function __construct(?string $transactionID = null, ?string $command = null, ?string $date = null, ?string $currency = null, ?string $amount = null, ?string $retailername = null, ?string $retailerAddress = null, ?string $retailerPostalCode = null, ?string $retailerCity = null, ?string $tag = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setCommand($command)
            ->setDate($date)
            ->setCurrency($currency)
            ->setAmount($amount)
            ->setRetailername($retailername)
            ->setRetailerAddress($retailerAddress)
            ->setRetailerPostalCode($retailerPostalCode)
            ->setRetailerCity($retailerCity)
            ->setTag($tag);
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
     * @return \StructType\Transaction
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
    /**
     * Get Command value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommand(): ?string
    {
        return isset($this->Command) ? $this->Command : null;
    }
    /**
     * Set Command value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $command
     * @return \StructType\Transaction
     */
    public function setCommand(?string $command = null): self
    {
        // validation for constraint: string
        if (!is_null($command) && !is_string($command)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($command, true), gettype($command)), __LINE__);
        }
        if (is_null($command) || (is_array($command) && empty($command))) {
            unset($this->Command);
        } else {
            $this->Command = $command;
        }
        
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\Transaction
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
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
     * @return \StructType\Transaction
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
    /**
     * Get Amount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return isset($this->Amount) ? $this->Amount : null;
    }
    /**
     * Set Amount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $amount
     * @return \StructType\Transaction
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }
        
        return $this;
    }
    /**
     * Get Retailername value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRetailername(): ?string
    {
        return isset($this->Retailername) ? $this->Retailername : null;
    }
    /**
     * Set Retailername value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $retailername
     * @return \StructType\Transaction
     */
    public function setRetailername(?string $retailername = null): self
    {
        // validation for constraint: string
        if (!is_null($retailername) && !is_string($retailername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retailername, true), gettype($retailername)), __LINE__);
        }
        if (is_null($retailername) || (is_array($retailername) && empty($retailername))) {
            unset($this->Retailername);
        } else {
            $this->Retailername = $retailername;
        }
        
        return $this;
    }
    /**
     * Get RetailerAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRetailerAddress(): ?string
    {
        return isset($this->RetailerAddress) ? $this->RetailerAddress : null;
    }
    /**
     * Set RetailerAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $retailerAddress
     * @return \StructType\Transaction
     */
    public function setRetailerAddress(?string $retailerAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($retailerAddress) && !is_string($retailerAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retailerAddress, true), gettype($retailerAddress)), __LINE__);
        }
        if (is_null($retailerAddress) || (is_array($retailerAddress) && empty($retailerAddress))) {
            unset($this->RetailerAddress);
        } else {
            $this->RetailerAddress = $retailerAddress;
        }
        
        return $this;
    }
    /**
     * Get RetailerPostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRetailerPostalCode(): ?string
    {
        return isset($this->RetailerPostalCode) ? $this->RetailerPostalCode : null;
    }
    /**
     * Set RetailerPostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $retailerPostalCode
     * @return \StructType\Transaction
     */
    public function setRetailerPostalCode(?string $retailerPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($retailerPostalCode) && !is_string($retailerPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retailerPostalCode, true), gettype($retailerPostalCode)), __LINE__);
        }
        if (is_null($retailerPostalCode) || (is_array($retailerPostalCode) && empty($retailerPostalCode))) {
            unset($this->RetailerPostalCode);
        } else {
            $this->RetailerPostalCode = $retailerPostalCode;
        }
        
        return $this;
    }
    /**
     * Get RetailerCity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRetailerCity(): ?string
    {
        return isset($this->RetailerCity) ? $this->RetailerCity : null;
    }
    /**
     * Set RetailerCity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $retailerCity
     * @return \StructType\Transaction
     */
    public function setRetailerCity(?string $retailerCity = null): self
    {
        // validation for constraint: string
        if (!is_null($retailerCity) && !is_string($retailerCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retailerCity, true), gettype($retailerCity)), __LINE__);
        }
        if (is_null($retailerCity) || (is_array($retailerCity) && empty($retailerCity))) {
            unset($this->RetailerCity);
        } else {
            $this->RetailerCity = $retailerCity;
        }
        
        return $this;
    }
    /**
     * Get Tag value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTag(): ?string
    {
        return isset($this->Tag) ? $this->Tag : null;
    }
    /**
     * Set Tag value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tag
     * @return \StructType\Transaction
     */
    public function setTag(?string $tag = null): self
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tag, true), gettype($tag)), __LINE__);
        }
        if (is_null($tag) || (is_array($tag) && empty($tag))) {
            unset($this->Tag);
        } else {
            $this->Tag = $tag;
        }
        
        return $this;
    }
}
