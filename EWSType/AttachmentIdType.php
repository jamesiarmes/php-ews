<?php
/**
 * Contains EWSType_AttachmentIdType.
 */

/**
 * Identifies an item or file attachment.
 *
 * @package php-ews\Types
 */
class EWSType_AttachmentIdType extends EWSType
{
    /**
     * Identifies the unique identifier of the attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Id;

    /**
     * Identifies the unique identifier of the root store item to which the
     * attachment is attached.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemChangeKey;

    /**
     * Identifies the change key of the root store item to which the attachment
     * is attached.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemId;
}
