<?php
/**
 * Contains UploadItemsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to upload items into a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class UploadItemsType extends EWSType
{
    /**
     * Contains an array of items to upload into a mailbox.
     *
     * @since Exchange 2010 SP1
     *
     * @var NonEmptyArrayOfUploadItemsType
     */
    public $Items;
}
