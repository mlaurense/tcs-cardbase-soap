<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeExpireDateResponse StructType
 * @subpackage Structs
 */
class ChangeExpireDateResponse extends AbstractStructBase
{
    /**
     * The Card
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Card|null
     */
    protected ?\StructType\Card $Card = null;
    /**
     * Constructor method for ChangeExpireDateResponse
     * @uses ChangeExpireDateResponse::setCard()
     * @param \StructType\Card $card
     */
    public function __construct(?\StructType\Card $card = null)
    {
        $this
            ->setCard($card);
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
     * @return \StructType\ChangeExpireDateResponse
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
