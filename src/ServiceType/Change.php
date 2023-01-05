<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change ServiceType
 * @subpackage Services
 */
class Change extends AbstractSoapClientBase
{
    /**
     * Sets the Hash SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $hash
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ServiceType\Change
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
     * @return \ServiceType\Change
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
     * @return \ServiceType\Change
     */
    public function setSoapHeaderRequestID(string $requestID, string $namespace = 'http://ws.tcs-cms.nl/wsdl/pointofsale/v4', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestID', $requestID, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named ChangeExpireDate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Hash, PointOfSale, RequestID
     * - SOAPHeaderNamespaces: http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4
     * - SOAPHeaderTypes: string, \StructType\PointOfSaleIdentifier, string
     * - SOAPHeaders: required, required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ChangeExpireDateRequest $parameters
     * @return \StructType\ChangeExpireDateResponse|bool
     */
    public function ChangeExpireDate(\StructType\ChangeExpireDateRequest $parameters)
    {
        try {
            $this->setResult($resultChangeExpireDate = $this->getSoapClient()->__soapCall('ChangeExpireDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultChangeExpireDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ChangeProduct
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Hash, PointOfSale, RequestID
     * - SOAPHeaderNamespaces: http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4
     * - SOAPHeaderTypes: string, \StructType\PointOfSaleIdentifier, string
     * - SOAPHeaders: required, required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ChangeProductRequest $parameters
     * @return \StructType\ChangeProductResponse|bool
     */
    public function ChangeProduct(\StructType\ChangeProductRequest $parameters)
    {
        try {
            $this->setResult($resultChangeProduct = $this->getSoapClient()->__soapCall('ChangeProduct', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultChangeProduct;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ChangeExpireDateResponse|\StructType\ChangeProductResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
