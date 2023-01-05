<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Product StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Product
 * @subpackage Structs
 */
class Product extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The EANs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EanList|null
     */
    protected ?\StructType\EanList $EANs = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The RebatePercentage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float|null
     */
    protected ?float $RebatePercentage = null;
    /**
     * The ActivationRange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ValueRange|null
     */
    protected ?\StructType\ValueRange $ActivationRange = null;
    /**
     * The WithdrawRange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ValueRange|null
     */
    protected ?\StructType\ValueRange $WithdrawRange = null;
    /**
     * Constructor method for Product
     * @uses Product::setName()
     * @uses Product::setEANs()
     * @uses Product::setType()
     * @uses Product::setRebatePercentage()
     * @uses Product::setActivationRange()
     * @uses Product::setWithdrawRange()
     * @param string $name
     * @param \StructType\EanList $eANs
     * @param string $type
     * @param float $rebatePercentage
     * @param \StructType\ValueRange $activationRange
     * @param \StructType\ValueRange $withdrawRange
     */
    public function __construct(?string $name = null, ?\StructType\EanList $eANs = null, ?string $type = null, ?float $rebatePercentage = null, ?\StructType\ValueRange $activationRange = null, ?\StructType\ValueRange $withdrawRange = null)
    {
        $this
            ->setName($name)
            ->setEANs($eANs)
            ->setType($type)
            ->setRebatePercentage($rebatePercentage)
            ->setActivationRange($activationRange)
            ->setWithdrawRange($withdrawRange);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\Product
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get EANs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EanList|null
     */
    public function getEANs(): ?\StructType\EanList
    {
        return isset($this->EANs) ? $this->EANs : null;
    }
    /**
     * Set EANs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EanList $eANs
     * @return \StructType\Product
     */
    public function setEANs(?\StructType\EanList $eANs = null): self
    {
        if (is_null($eANs) || (is_array($eANs) && empty($eANs))) {
            unset($this->EANs);
        } else {
            $this->EANs = $eANs;
        }
        
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType(): ?string
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \StructType\Product
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        
        return $this;
    }
    /**
     * Get RebatePercentage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getRebatePercentage(): ?float
    {
        return isset($this->RebatePercentage) ? $this->RebatePercentage : null;
    }
    /**
     * Set RebatePercentage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $rebatePercentage
     * @return \StructType\Product
     */
    public function setRebatePercentage(?float $rebatePercentage = null): self
    {
        // validation for constraint: float
        if (!is_null($rebatePercentage) && !(is_float($rebatePercentage) || is_numeric($rebatePercentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rebatePercentage, true), gettype($rebatePercentage)), __LINE__);
        }
        if (is_null($rebatePercentage) || (is_array($rebatePercentage) && empty($rebatePercentage))) {
            unset($this->RebatePercentage);
        } else {
            $this->RebatePercentage = $rebatePercentage;
        }
        
        return $this;
    }
    /**
     * Get ActivationRange value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ValueRange|null
     */
    public function getActivationRange(): ?\StructType\ValueRange
    {
        return isset($this->ActivationRange) ? $this->ActivationRange : null;
    }
    /**
     * Set ActivationRange value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ValueRange $activationRange
     * @return \StructType\Product
     */
    public function setActivationRange(?\StructType\ValueRange $activationRange = null): self
    {
        if (is_null($activationRange) || (is_array($activationRange) && empty($activationRange))) {
            unset($this->ActivationRange);
        } else {
            $this->ActivationRange = $activationRange;
        }
        
        return $this;
    }
    /**
     * Get WithdrawRange value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ValueRange|null
     */
    public function getWithdrawRange(): ?\StructType\ValueRange
    {
        return isset($this->WithdrawRange) ? $this->WithdrawRange : null;
    }
    /**
     * Set WithdrawRange value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ValueRange $withdrawRange
     * @return \StructType\Product
     */
    public function setWithdrawRange(?\StructType\ValueRange $withdrawRange = null): self
    {
        if (is_null($withdrawRange) || (is_array($withdrawRange) && empty($withdrawRange))) {
            unset($this->WithdrawRange);
        } else {
            $this->WithdrawRange = $withdrawRange;
        }
        
        return $this;
    }
}
