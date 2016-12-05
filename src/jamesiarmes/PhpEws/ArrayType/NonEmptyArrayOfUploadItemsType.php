<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfUploadItemsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of items to upload into a mailbox.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfUploadItemsType extends ArrayType
{
    /**
     * Represents a single item to upload into a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\UploadItemType[]
     */
    public $Item = array();
}
