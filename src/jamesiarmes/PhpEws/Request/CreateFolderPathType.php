<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\CreateFolderPathType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents a request to create a folder path.
 *
 * @package php-ews\Request
 */
class CreateFolderPathType extends BaseRequestType
{
    /**
     * Identifies the folder in which a new folder is created.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Contains an array of folders that indicate the relative folder path of
     * the folder path to be created.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfFoldersType
     */
    public $RelativeFolderPath;
}
