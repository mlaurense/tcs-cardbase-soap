<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WithdrawRequest StructType
 * @subpackage Structs
 */
class WithdrawRequest extends AbstractStructBase
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
     * The CustomerID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomerID = null;
    /**
     * The Receiptnumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Receiptnumber = null;
    /**
     * The OrderTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Money|null
     */
    protected ?\StructType\Money $OrderTotal = null;
    /**
     * The Products
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EanList|null
     */
    protected ?\StructType\EanList $Products = null;
    /**
     * The Categories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CategoryList|null
     */
    protected ?\StructType\CategoryList $Categories = null;
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
     * Constructor method for WithdrawRequest
     * @uses WithdrawRequest::setCard()
     * @uses WithdrawRequest::setValue()
     * @uses WithdrawRequest::setCustomerID()
     * @uses WithdrawRequest::setReceiptnumber()
     * @uses WithdrawRequest::setOrderTotal()
     * @uses WithdrawRequest::setProducts()
     * @uses WithdrawRequest::setCategories()
     * @uses WithdrawRequest::setRemark()
     * @uses WithdrawRequest::setTransactionTag()
     * @param \StructType\CardIdentifier $card
     * @param \StructType\Money $value
     * @param string $customerID
     * @param string $receiptnumber
     * @param \StructType\Money $orderTotal
     * @param \StructType\EanList $products
     * @param \StructType\CategoryList $categories
     * @param string $remark
     * @param string $transactionTag
     */
    public function __construct(\StructType\CardIdentifier $card, \StructType\Money $value, ?string $customerID = null, ?string $receiptnumber = null, ?\StructType\Money $orderTotal = null, ?\StructType\EanList $products = null, ?\StructType\CategoryList $categories = null, ?string $remark = null, ?string $transactionTag = null)
    {
        $this
            ->setCard($card)
            ->setValue($value)
            ->setCustomerID($customerID)
            ->setReceiptnumber($receiptnumber)
            ->setOrderTotal($orderTotal)
            ->setProducts($products)
            ->setCategories($categories)
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
     * @return \StructType\WithdrawRequest
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
     * @return \StructType\WithdrawRequest
     */
    public function setValue(\StructType\Money $value): self
    {
        $this->Value = $value;
        
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
     * @return \StructType\WithdrawRequest
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
     * @return \StructType\WithdrawRequest
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
     * Get OrderTotal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Money|null
     */
    public function getOrderTotal(): ?\StructType\Money
    {
        return isset($this->OrderTotal) ? $this->OrderTotal : null;
    }
    /**
     * Set OrderTotal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Money $orderTotal
     * @return \StructType\WithdrawRequest
     */
    public function setOrderTotal(?\StructType\Money $orderTotal = null): self
    {
        if (is_null($orderTotal) || (is_array($orderTotal) && empty($orderTotal))) {
            unset($this->OrderTotal);
        } else {
            $this->OrderTotal = $orderTotal;
        }
        
        return $this;
    }
    /**
     * Get Products value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EanList|null
     */
    public function getProducts(): ?\StructType\EanList
    {
        return isset($this->Products) ? $this->Products : null;
    }
    /**
     * Set Products value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EanList $products
     * @return \StructType\WithdrawRequest
     */
    public function setProducts(?\StructType\EanList $products = null): self
    {
        if (is_null($products) || (is_array($products) && empty($products))) {
            unset($this->Products);
        } else {
            $this->Products = $products;
        }
        
        return $this;
    }
    /**
     * Get Categories value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CategoryList|null
     */
    public function getCategories(): ?\StructType\CategoryList
    {
        return isset($this->Categories) ? $this->Categories : null;
    }
    /**
     * Set Categories value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CategoryList $categories
     * @return \StructType\WithdrawRequest
     */
    public function setCategories(?\StructType\CategoryList $categories = null): self
    {
        if (is_null($categories) || (is_array($categories) && empty($categories))) {
            unset($this->Categories);
        } else {
            $this->Categories = $categories;
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
     * @return \StructType\WithdrawRequest
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
     * @return \StructType\WithdrawRequest
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
