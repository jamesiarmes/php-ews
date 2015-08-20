<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing EmailAddressType
 *
 *
 * XSD Type: EmailAddress
 *
 * @method string getName()
 * @method EmailAddressType setName(string $name)
 * @method string getAddress()
 * @method EmailAddressType setAddress(string $address)
 * @method string getRoutingType()
 * @method EmailAddressType setRoutingType(string $routingType)
 */
class EmailAddressType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $address = null;

    /**
     * @var string
     */
    protected $routingType = null;
}
