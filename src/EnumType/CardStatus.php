<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CardStatus EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CardStatus
 * @subpackage Enumerations
 */
class CardStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Registered'
     * @return string 'Registered'
     */
    const VALUE_REGISTERED = 'Registered';
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Deactivated'
     * @return string 'Deactivated'
     */
    const VALUE_DEACTIVATED = 'Deactivated';
    /**
     * Constant for value 'Suspended'
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_REGISTERED
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_DEACTIVATED
     * @uses self::VALUE_SUSPENDED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_REGISTERED,
            self::VALUE_ACTIVE,
            self::VALUE_DEACTIVATED,
            self::VALUE_SUSPENDED,
        ];
    }
}
