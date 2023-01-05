<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValueRange StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ValueRange
 * @subpackage Structs
 */
class ValueRange extends AbstractStructBase
{
    /**
     * The Min
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $Min = null;
    /**
     * The Max
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $Max = null;
    /**
     * Constructor method for ValueRange
     * @uses ValueRange::setMin()
     * @uses ValueRange::setMax()
     * @param int $min
     * @param int $max
     */
    public function __construct(?int $min = null, ?int $max = null)
    {
        $this
            ->setMin($min)
            ->setMax($max);
    }
    /**
     * Get Min value
     * @return int|null
     */
    public function getMin(): ?int
    {
        return $this->Min;
    }
    /**
     * Set Min value
     * @param int $min
     * @return \StructType\ValueRange
     */
    public function setMin(?int $min = null): self
    {
        // validation for constraint: int
        if (!is_null($min) && !(is_int($min) || ctype_digit($min))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($min, true), gettype($min)), __LINE__);
        }
        $this->Min = $min;
        
        return $this;
    }
    /**
     * Get Max value
     * @return int|null
     */
    public function getMax(): ?int
    {
        return $this->Max;
    }
    /**
     * Set Max value
     * @param int $max
     * @return \StructType\ValueRange
     */
    public function setMax(?int $max = null): self
    {
        // validation for constraint: int
        if (!is_null($max) && !(is_int($max) || ctype_digit($max))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($max, true), gettype($max)), __LINE__);
        }
        $this->Max = $max;
        
        return $this;
    }
}
