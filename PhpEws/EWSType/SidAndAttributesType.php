<?php
/**
 * Definition of the SidAndAttributesType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SidAndAttributesType type
 */
class SidAndAttributesType extends PhpEws\EWSType
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
     * @var unsignedInt
     */
    public $Attributes;
}
