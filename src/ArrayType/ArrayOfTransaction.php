<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTransaction ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTransaction
 * @subpackage Arrays
 */
class ArrayOfTransaction extends AbstractStructArrayBase
{
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Transaction[]
     */
    protected ?array $Transaction = null;
    /**
     * Constructor method for ArrayOfTransaction
     * @uses ArrayOfTransaction::setTransaction()
     * @param \StructType\Transaction[] $transaction
     */
    public function __construct(?array $transaction = null)
    {
        $this
            ->setTransaction($transaction);
    }
    /**
     * Get Transaction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Transaction[]
     */
    public function getTransaction(): ?array
    {
        return isset($this->Transaction) ? $this->Transaction : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionForArrayConstraintsFromSetTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTransactionTransactionItem) {
            // validation for constraint: itemType
            if (!$arrayOfTransactionTransactionItem instanceof \StructType\Transaction) {
                $invalidValues[] = is_object($arrayOfTransactionTransactionItem) ? get_class($arrayOfTransactionTransactionItem) : sprintf('%s(%s)', gettype($arrayOfTransactionTransactionItem), var_export($arrayOfTransactionTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction property can only contain items of type \StructType\Transaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Transaction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Transaction[] $transaction
     * @return \ArrayType\ArrayOfTransaction
     */
    public function setTransaction(?array $transaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($transactionArrayErrorMessage = self::validateTransactionForArrayConstraintsFromSetTransaction($transaction))) {
            throw new InvalidArgumentException($transactionArrayErrorMessage, __LINE__);
        }
        if (is_null($transaction) || (is_array($transaction) && empty($transaction))) {
            unset($this->Transaction);
        } else {
            $this->Transaction = $transaction;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Transaction|null
     */
    public function current(): ?\StructType\Transaction
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Transaction|null
     */
    public function item($index): ?\StructType\Transaction
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Transaction|null
     */
    public function first(): ?\StructType\Transaction
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Transaction|null
     */
    public function last(): ?\StructType\Transaction
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Transaction|null
     */
    public function offsetGet($offset): ?\StructType\Transaction
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\Transaction $item
     * @return \ArrayType\ArrayOfTransaction
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Transaction) {
            throw new InvalidArgumentException(sprintf('The Transaction property can only contain items of type \StructType\Transaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Transaction
     */
    public function getAttributeName(): string
    {
        return 'Transaction';
    }
}
