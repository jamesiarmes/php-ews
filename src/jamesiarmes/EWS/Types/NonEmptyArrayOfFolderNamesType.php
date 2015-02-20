<?php
/**
 * Contains NonEmptyArrayOfFolderNamesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of named managed folders to add to a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfFolderNamesType extends EWSType
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
