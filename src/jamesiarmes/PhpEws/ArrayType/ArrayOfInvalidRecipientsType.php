<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfInvalidRecipientsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents the recipients of a folder sharing request that are invalid.
 *
 * @package php-ews\Array
 */
class ArrayOfInvalidRecipientsType extends ArrayType
{
    /**
     * Contains the SMTP address of the invalid recipient and information about
     * why the recipient is invalid.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\InvalidRecipientType[]
     */
    public $InvalidRecipient = array();
}
