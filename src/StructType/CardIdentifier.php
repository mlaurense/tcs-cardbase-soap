<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardIdentifier StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CardIdentifier
 * @subpackage Structs
 */
class CardIdentifier extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The VerificationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VerificationCode = null;
    /**
     * Constructor method for CardIdentifier
     * @uses CardIdentifier::setNumber()
     * @uses CardIdentifier::setVerificationCode()
     * @param string $number
     * @param string $verificationCode
     */
    public function __construct(?string $number = null, ?string $verificationCode = null)
    {
        $this
            ->setNumber($number)
            ->setVerificationCode($verificationCode);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \StructType\CardIdentifier
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get VerificationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVerificationCode(): ?string
    {
        return isset($this->VerificationCode) ? $this->VerificationCode : null;
    }
    /**
     * Set VerificationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $verificationCode
     * @return \StructType\CardIdentifier
     */
    public function setVerificationCode(?string $verificationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($verificationCode) && !is_string($verificationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verificationCode, true), gettype($verificationCode)), __LINE__);
        }
        if (is_null($verificationCode) || (is_array($verificationCode) && empty($verificationCode))) {
            unset($this->VerificationCode);
        } else {
            $this->VerificationCode = $verificationCode;
        }
        
        return $this;
    }
}
