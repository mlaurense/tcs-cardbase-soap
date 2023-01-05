<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerInfoResponse StructType
 * @subpackage Structs
 */
class CustomerInfoResponse extends AbstractStructBase
{
    /**
     * The Cards
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfCard|null
     */
    protected ?\ArrayType\ArrayOfCard $Cards = null;
    /**
     * Constructor method for CustomerInfoResponse
     * @uses CustomerInfoResponse::setCards()
     * @param \ArrayType\ArrayOfCard $cards
     */
    public function __construct(?\ArrayType\ArrayOfCard $cards = null)
    {
        $this
            ->setCards($cards);
    }
    /**
     * Get Cards value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfCard|null
     */
    public function getCards(): ?\ArrayType\ArrayOfCard
    {
        return isset($this->Cards) ? $this->Cards : null;
    }
    /**
     * Set Cards value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfCard $cards
     * @return \StructType\CustomerInfoResponse
     */
    public function setCards(?\ArrayType\ArrayOfCard $cards = null): self
    {
        if (is_null($cards) || (is_array($cards) && empty($cards))) {
            unset($this->Cards);
        } else {
            $this->Cards = $cards;
        }
        
        return $this;
    }
}
