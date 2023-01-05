<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Card ServiceType
 * @subpackage Services
 */
class Card extends AbstractSoapClientBase
{
    /**
     * Sets the Hash SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $hash
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ServiceType\Card
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
     * @return \ServiceType\Card
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
     * @return \ServiceType\Card
     */
    public function setSoapHeaderRequestID(string $requestID, string $namespace = 'http://ws.tcs-cms.nl/wsdl/pointofsale/v4', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestID', $requestID, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named CardInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Hash, PointOfSale, RequestID
     * - SOAPHeaderNamespaces: http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4
     * - SOAPHeaderTypes: string, \StructType\PointOfSaleIdentifier, string
     * - SOAPHeaders: required, required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CardInfoRequest $parameters
     * @return \StructType\CardInfoResponse|bool
     */
    public function CardInfo(\StructType\CardInfoRequest $parameters)
    {
        try {
            $this->setResult($resultCardInfo = $this->getSoapClient()->__soapCall('CardInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCardInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CardInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
