<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing EmailAddressType
 *
 *
 * XSD Type: EmailAddress
 *
 * @method EmailAddressType getName()
 * @method EmailAddressType setName(string $name)
 * @method EmailAddressType getAddress()
 * @method EmailAddressType setAddress(string $address)
 * @method EmailAddressType getRoutingType()
 * @method EmailAddressType setRoutingType(string $routingType)
 */
class EmailAddressType extends Type
{

    /**
     * @property string $name
     */
    protected $name = null;

    /**
     * @property string $address
     */
    protected $address = null;

    /**
     * @property string $routingType
     */
    protected $routingType = null;
}
