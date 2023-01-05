<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerInfoRequest StructType
 * @subpackage Structs
 */
class CustomerInfoRequest extends AbstractStructBase
{
    /**
     * The CustomerID
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $CustomerID;
    /**
     * Constructor method for CustomerInfoRequest
     * @uses CustomerInfoRequest::setCustomerID()
     * @param string $customerID
     */
    public function __construct(string $customerID)
    {
        $this
            ->setCustomerID($customerID);
    }
    /**
     * Get CustomerID value
     * @return string
     */
    public function getCustomerID(): string
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param string $customerID
     * @return \StructType\CustomerInfoRequest
     */
    public function setCustomerID(string $customerID): self
    {
        // validation for constraint: string
        if (!is_null($customerID) && !is_string($customerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerID, true), gettype($customerID)), __LINE__);
        }
        $this->CustomerID = $customerID;
        
        return $this;
    }
}
