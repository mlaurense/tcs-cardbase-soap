<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transaction ServiceType
 * @subpackage Services
 */
class Transaction extends AbstractSoapClientBase
{
    /**
     * Sets the Hash SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $hash
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ServiceType\Transaction
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
     * @return \ServiceType\Transaction
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
     * @return \ServiceType\Transaction
     */
    public function setSoapHeaderRequestID(string $requestID, string $namespace = 'http://ws.tcs-cms.nl/wsdl/pointofsale/v4', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'RequestID', $requestID, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named TransactionHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Hash, PointOfSale, RequestID
     * - SOAPHeaderNamespaces: http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4, http://ws.tcs-cms.nl/wsdl/pointofsale/v4
     * - SOAPHeaderTypes: string, \StructType\PointOfSaleIdentifier, string
     * - SOAPHeaders: required, required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TransactionHistoryRequest $parameters
     * @return \StructType\TransactionHistoryResponse|bool
     */
    public function TransactionHistory(\StructType\TransactionHistoryRequest $parameters)
    {
        try {
            $this->setResult($resultTransactionHistory = $this->getSoapClient()->__soapCall('TransactionHistory', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransactionHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\TransactionHistoryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
