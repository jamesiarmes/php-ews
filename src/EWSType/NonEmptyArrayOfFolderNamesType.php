<?php
/**
 * Contains EWSType_NonEmptyArrayOfFolderNamesType.
 */

/**
 * Represents an array of named managed folders to add to a mailbox.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfFolderNamesType extends EWSType
{
    /**
     * Identifies a single managed folder to add to mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FolderName;
}
