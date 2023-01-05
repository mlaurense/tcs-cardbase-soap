<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCard ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCard
 * @subpackage Arrays
 */
class ArrayOfCard extends AbstractStructArrayBase
{
    /**
     * The Card
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Card[]
     */
    protected ?array $Card = null;
    /**
     * Constructor method for ArrayOfCard
     * @uses ArrayOfCard::setCard()
     * @param \StructType\Card[] $card
     */
    public function __construct(?array $card = null)
    {
        $this
            ->setCard($card);
    }
    /**
     * Get Card value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Card[]
     */
    public function getCard(): ?array
    {
        return isset($this->Card) ? $this->Card : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCardForArrayConstraintsFromSetCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCardCardItem) {
            // validation for constraint: itemType
            if (!$arrayOfCardCardItem instanceof \StructType\Card) {
                $invalidValues[] = is_object($arrayOfCardCardItem) ? get_class($arrayOfCardCardItem) : sprintf('%s(%s)', gettype($arrayOfCardCardItem), var_export($arrayOfCardCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Card property can only contain items of type \StructType\Card, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Card value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Card[] $card
     * @return \ArrayType\ArrayOfCard
     */
    public function setCard(?array $card = null): self
    {
        // validation for constraint: array
        if ('' !== ($cardArrayErrorMessage = self::validateCardForArrayConstraintsFromSetCard($card))) {
            throw new InvalidArgumentException($cardArrayErrorMessage, __LINE__);
        }
        if (is_null($card) || (is_array($card) && empty($card))) {
            unset($this->Card);
        } else {
            $this->Card = $card;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Card|null
     */
    public function current(): ?\StructType\Card
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Card|null
     */
    public function item($index): ?\StructType\Card
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Card|null
     */
    public function first(): ?\StructType\Card
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Card|null
     */
    public function last(): ?\StructType\Card
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Card|null
     */
    public function offsetGet($offset): ?\StructType\Card
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\Card $item
     * @return \ArrayType\ArrayOfCard
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Card) {
            throw new InvalidArgumentException(sprintf('The Card property can only contain items of type \StructType\Card, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Card
     */
    public function getAttributeName(): string
    {
        return 'Card';
    }
}
