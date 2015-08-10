<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing EmailAddressType
 *
 *
 * XSD Type: EmailAddress
 *
 * @method EmailAddressType getName()
 * @method EmailAddressType setName($name)
 * @method EmailAddressType getAddress()
 * @method EmailAddressType setAddress($address)
 * @method EmailAddressType getRoutingType()
 * @method EmailAddressType setRoutingType($routingType)
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

