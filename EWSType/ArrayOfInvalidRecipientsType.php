<?php
/**
 * Contains EWSType_ArrayOfInvalidRecipientsType.
 */

/**
 * Represents the recipients of a folder sharing request that are invalid.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfInvalidRecipientsType extends EWSType
{
    /**
     * Contains the SMTP address of the invalid recipient and information about
     * why the recipient is invalid.
     *
     * @since Exchange 2010
     *
     * @var EWSType_InvalidRecipientType
     */
    public $InvalidRecipient;
}
