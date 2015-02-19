<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FindFolderResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single FindFolder operation request.
 *
 * @package php-ews\Types
 */
class FindFolderResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the results from a search of a single root folder during a
     * FindFolder operation.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FindFolderParentType
     */
    public $RootFolder;
}
