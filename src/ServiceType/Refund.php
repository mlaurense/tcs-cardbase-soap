<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Refund ServiceType
 * @subpackage Services
 */
class Refund extends AbstractSoapClientBase
{
    /**
     * Sets the Hash SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $hash
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ServiceType\Refund
     */
    public function setSoapHeaderHash(string $hash, string $namespace = 'http://ws.tcs-cms.nl/wsdl/pointofsale/v4', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'Hash', $hash, $mustUnderstand, $actor);
    }
    /**
     * Sets the PointOfSale SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \StructType\PointOfSaleIdentifier $pointOfSale
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ServiceType\Refund
     */
    public function setSoapHeaderPointOfSale(\StructType\PointOfSaleIdentifier $pointOfSale, string $namespace = 'http://ws.tcs-cms.nl/wsdl/pointofsale/v4', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'PointOfSale', $pointOfSale, $mustUnderstand, $actor);
    }
    /**
     * Sets the RequestID SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $requestID
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ServiceType\Refund
     */
    public function setSoapHeaderRequestID(string $requestID, string $namespace = 'http://ws.tcs-cms.nl/wsdl/pointofsale/v4', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestID', $requestID, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named Refund
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Hash, PointOfSale, RequestID
     * - SOAPHeaderNamespaces: http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4
     * - SOAPHeaderTypes: string, \StructType\PointOfSaleIdentifier, string
     * - SOAPHeaders: required, required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RefundRequest $parameters
     * @return \StructType\RefundResponse|bool
     */
    public function Refund(\StructType\RefundRequest $parameters)
    {
        try {
            $this->setResult($resultRefund = $this->getSoapClient()->__soapCall('Refund', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRefund;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RefundResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
