<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryList StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CategoryList
 * @subpackage Structs
 */
class CategoryList extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $Category = null;
    /**
     * Constructor method for CategoryList
     * @uses CategoryList::setCategory()
     * @param string[] $category
     */
    public function __construct(?array $category = null)
    {
        $this
            ->setCategory($category);
    }
    /**
     * Get Category value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getCategory(): ?array
    {
        return isset($this->Category) ? $this->Category : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryForArrayConstraintsFromSetCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryListCategoryItem) {
            // validation for constraint: itemType
            if (!is_string($categoryListCategoryItem)) {
                $invalidValues[] = is_object($categoryListCategoryItem) ? get_class($categoryListCategoryItem) : sprintf('%s(%s)', gettype($categoryListCategoryItem), var_export($categoryListCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Category property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Category value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $category
     * @return \StructType\CategoryList
     */
    public function setCategory(?array $category = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryArrayErrorMessage = self::validateCategoryForArrayConstraintsFromSetCategory($category))) {
            throw new InvalidArgumentException($categoryArrayErrorMessage, __LINE__);
        }
        if (is_null($category) || (is_array($category) && empty($category))) {
            unset($this->Category);
        } else {
            $this->Category = $category;
        }
        
        return $this;
    }
    /**
     * Add item to Category value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\CategoryList
     */
    public function addToCategory(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Category property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Category[] = $item;
        
        return $this;
    }
}
