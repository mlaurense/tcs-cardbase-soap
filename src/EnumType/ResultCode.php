<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ResultCode EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResultCode
 * @subpackage Enumerations
 */
class ResultCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'AccessError'
     * @return string 'AccessError'
     */
    const VALUE_ACCESS_ERROR = 'AccessError';
    /**
     * Constant for value 'CreditError'
     * @return string 'CreditError'
     */
    const VALUE_CREDIT_ERROR = 'CreditError';
    /**
     * Constant for value 'StatusError'
     * @return string 'StatusError'
     */
    const VALUE_STATUS_ERROR = 'StatusError';
    /**
     * Constant for value 'ServerError'
     * @return string 'ServerError'
     */
    const VALUE_SERVER_ERROR = 'ServerError';
    /**
     * Constant for value 'ClientError'
     * @return string 'ClientError'
     */
    const VALUE_CLIENT_ERROR = 'ClientError';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_ACCESS_ERROR
     * @uses self::VALUE_CREDIT_ERROR
     * @uses self::VALUE_STATUS_ERROR
     * @uses self::VALUE_SERVER_ERROR
     * @uses self::VALUE_CLIENT_ERROR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SUCCESS,
            self::VALUE_ACCESS_ERROR,
            self::VALUE_CREDIT_ERROR,
            self::VALUE_STATUS_ERROR,
            self::VALUE_SERVER_ERROR,
            self::VALUE_CLIENT_ERROR,
        ];
    }
}
