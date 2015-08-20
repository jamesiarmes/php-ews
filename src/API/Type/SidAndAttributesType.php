<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SidAndAttributesType
 *
 *
 * XSD Type: SidAndAttributesType
 *
 * @method SidAndAttributesType getAttributes()
 * @method SidAndAttributesType setAttributes(integer $attributes)
 * @method SidAndAttributesType getSecurityIdentifier()
 * @method SidAndAttributesType setSecurityIdentifier(string $securityIdentifier)
 */
class SidAndAttributesType extends Type
{

    /**
     * @property integer $attributes
     */
    protected $attributes = null;

    /**
     * @property string $securityIdentifier
     */
    protected $securityIdentifier = null;
}
