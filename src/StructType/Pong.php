<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pong StructType
 * @subpackage Structs
 */
class Pong extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Success = null;
    /**
     * Constructor method for Pong
     * @uses Pong::setSuccess()
     * @param bool $success
     */
    public function __construct(?bool $success = null)
    {
        $this
            ->setSuccess($success);
    }
    /**
     * Get Success value
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \StructType\Pong
     */
    public function setSuccess(?bool $success = null): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        
        return $this;
    }
}
