<?php
/**
 * Contains ArrayOfInvalidRecipientsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the recipients of a folder sharing request that are invalid.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfInvalidRecipientsType extends EWSType
{
    /**
     * Contains the SMTP address of the invalid recipient and information about
     * why the recipient is invalid.
     *
     * @since Exchange 2010
     *
     * @var InvalidRecipientType
     */
    public $InvalidRecipient;
}
