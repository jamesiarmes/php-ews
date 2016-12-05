<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfFolderNamesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of named managed folders to add to a mailbox.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfFolderNamesType extends ArrayType
{
    /**
     * Identifies a single managed folder to add to mailbox.
     *
     * @since Exchange 2007
     *
     * @var string[]
     */
    public $FolderName = array();
}
