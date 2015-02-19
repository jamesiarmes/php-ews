<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FolderInfoResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single CopyFolder operation request.
 *
 * @package php-ews\Types
 */
class FolderInfoResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of copied folders.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfFoldersType
     */
    public $Folders;
}
