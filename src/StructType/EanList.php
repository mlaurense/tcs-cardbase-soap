<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EanList StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EanList
 * @subpackage Structs
 */
class EanList extends AbstractStructBase
{
    /**
     * The EAN
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    protected ?array $EAN = null;
    /**
     * Constructor method for EanList
     * @uses EanList::setEAN()
     * @param string[] $eAN
     */
    public function __construct(?array $eAN = null)
    {
        $this
            ->setEAN($eAN);
    }
    /**
     * Get EAN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getEAN(): ?array
    {
        return isset($this->EAN) ? $this->EAN : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEAN method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEAN method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEANForArrayConstraintsFromSetEAN(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $eanListEANItem) {
            // validation for constraint: itemType
            if (!is_string($eanListEANItem)) {
                $invalidValues[] = is_object($eanListEANItem) ? get_class($eanListEANItem) : sprintf('%s(%s)', gettype($eanListEANItem), var_export($eanListEANItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EAN property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EAN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $eAN
     * @return \StructType\EanList
     */
    public function setEAN(?array $eAN = null): self
    {
        // validation for constraint: array
        if ('' !== ($eANArrayErrorMessage = self::validateEANForArrayConstraintsFromSetEAN($eAN))) {
            throw new InvalidArgumentException($eANArrayErrorMessage, __LINE__);
        }
        if (is_null($eAN) || (is_array($eAN) && empty($eAN))) {
            unset($this->EAN);
        } else {
            $this->EAN = $eAN;
        }
        
        return $this;
    }
    /**
     * Add item to EAN value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\EanList
     */
    public function addToEAN(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The EAN property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EAN[] = $item;
        
        return $this;
    }
}
