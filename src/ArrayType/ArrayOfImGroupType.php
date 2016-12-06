<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfImGroupType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of instant messaging (IM) groups.
 *
 * @package php-ews\Array
 */
class ArrayOfImGroupType extends ArrayType
{
    /**
     * Represents an instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ImGroupType[]
     */
    public $ImGroup = array();
}
