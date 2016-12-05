<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfFolderChangesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a collection of changes for a folder.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfFolderChangesType extends ArrayType
{
    /**
     * Represents a single change to be performed on a single folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FolderChangeType[]
     */
    public $FolderChange = array();
}
