<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PointOfSaleIdentifier StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PointOfSaleIdentifier
 * @subpackage Structs
 */
class PointOfSaleIdentifier extends AbstractStructBase
{
    /**
     * The MerchantID
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $MerchantID = null;
    /**
     * The DeviceID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DeviceID = null;
    /**
     * The OperatorID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OperatorID = null;
    /**
     * Constructor method for PointOfSaleIdentifier
     * @uses PointOfSaleIdentifier::setMerchantID()
     * @uses PointOfSaleIdentifier::setDeviceID()
     * @uses PointOfSaleIdentifier::setOperatorID()
     * @param string $merchantID
     * @param string $deviceID
     * @param string $operatorID
     */
    public function __construct(?string $merchantID = null, ?string $deviceID = null, ?string $operatorID = null)
    {
        $this
            ->setMerchantID($merchantID)
            ->setDeviceID($deviceID)
            ->setOperatorID($operatorID);
    }
    /**
     * Get MerchantID value
     * @return string|null
     */
    public function getMerchantID(): ?string
    {
        return $this->MerchantID;
    }
    /**
     * Set MerchantID value
     * @param string $merchantID
     * @return \StructType\PointOfSaleIdentifier
     */
    public function setMerchantID(?string $merchantID = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantID) && !is_string($merchantID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantID, true), gettype($merchantID)), __LINE__);
        }
        $this->MerchantID = $merchantID;
        
        return $this;
    }
    /**
     * Get DeviceID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeviceID(): ?string
    {
        return isset($this->DeviceID) ? $this->DeviceID : null;
    }
    /**
     * Set DeviceID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deviceID
     * @return \StructType\PointOfSaleIdentifier
     */
    public function setDeviceID(?string $deviceID = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceID) && !is_string($deviceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceID, true), gettype($deviceID)), __LINE__);
        }
        if (is_null($deviceID) || (is_array($deviceID) && empty($deviceID))) {
            unset($this->DeviceID);
        } else {
            $this->DeviceID = $deviceID;
        }
        
        return $this;
    }
    /**
     * Get OperatorID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOperatorID(): ?string
    {
        return isset($this->OperatorID) ? $this->OperatorID : null;
    }
    /**
     * Set OperatorID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $operatorID
     * @return \StructType\PointOfSaleIdentifier
     */
    public function setOperatorID(?string $operatorID = null): self
    {
        // validation for constraint: string
        if (!is_null($operatorID) && !is_string($operatorID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatorID, true), gettype($operatorID)), __LINE__);
        }
        if (is_null($operatorID) || (is_array($operatorID) && empty($operatorID))) {
            unset($this->OperatorID);
        } else {
            $this->OperatorID = $operatorID;
        }
        
        return $this;
    }
}
