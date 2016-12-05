<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfUserIdType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of delegate users to get or remove from a principal's
 * mailbox.
 *
 * @package php-ews\Array
 */
class ArrayOfUserIdType extends ArrayType
{
    /**
     * Identifies a delegate to get or remove from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\UserIdType[]
     */
    public $UserId = array();
}
