<?php
/**
 * Definition of the SidAndAttributesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the SidAndAttributesType type
 */
class SidAndAttributesType extends EWSType
{
    /**
     * SecurityIdentifier property
     *
     * @var string
     */
    public $SecurityIdentifier;

    /**
     * Attributes property
     *
     * @var EWSType_unsignedInt
     */
    public $Attributes;
}
