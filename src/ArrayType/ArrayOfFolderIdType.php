<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfFolderIdType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a list of folder identifiers.
 *
 * @package php-ews\Array
 */
class ArrayOfFolderIdType extends ArrayType
{
    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\FolderIdType[]
     */
    public $FolderId = array();
}
