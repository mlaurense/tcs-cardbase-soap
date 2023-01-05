<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionHistoryResponse StructType
 * @subpackage Structs
 */
class TransactionHistoryResponse extends AbstractStructBase
{
    /**
     * The Transactions
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \ArrayType\ArrayOfTransaction
     */
    protected \ArrayType\ArrayOfTransaction $Transactions;
    /**
     * The Card
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Card|null
     */
    protected ?\StructType\Card $Card = null;
    /**
     * Constructor method for TransactionHistoryResponse
     * @uses TransactionHistoryResponse::setTransactions()
     * @uses TransactionHistoryResponse::setCard()
     * @param \ArrayType\ArrayOfTransaction $transactions
     * @param \StructType\Card $card
     */
    public function __construct(\ArrayType\ArrayOfTransaction $transactions, ?\StructType\Card $card = null)
    {
        $this
            ->setTransactions($transactions)
            ->setCard($card);
    }
    /**
     * Get Transactions value
     * @return \ArrayType\ArrayOfTransaction
     */
    public function getTransactions(): \ArrayType\ArrayOfTransaction
    {
        return $this->Transactions;
    }
    /**
     * Set Transactions value
     * @param \ArrayType\ArrayOfTransaction $transactions
     * @return \StructType\TransactionHistoryResponse
     */
    public function setTransactions(\ArrayType\ArrayOfTransaction $transactions): self
    {
        $this->Transactions = $transactions;
        
        return $this;
    }
    /**
     * Get Card value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Card|null
     */
    public function getCard(): ?\StructType\Card
    {
        return isset($this->Card) ? $this->Card : null;
    }
    /**
     * Set Card value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Card $card
     * @return \StructType\TransactionHistoryResponse
     */
    public function setCard(?\StructType\Card $card = null): self
    {
        if (is_null($card) || (is_array($card) && empty($card))) {
            unset($this->Card);
        } else {
            $this->Card = $card;
        }
        
        return $this;
    }
}
