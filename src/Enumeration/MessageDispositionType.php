<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\MessageDispositionType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Describes how an e-mail message will be handled after it is created.
 *
 * @package php-ews\Enumeration
 */
class MessageDispositionType extends Enumeration
{
    /**
     * The message item is saved in the folder that is specified by the
     * SavedItemFolderId element.
     *
     * Messages can be sent later by using the SendItem operation. An item
     * identifier is returned in the response. Item identifiers are not returned
     * for any item types except for message items. This includes response
     * objects.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SAVE_ONLY = 'SaveOnly';

    /**
     * The item is sent and a copy is saved in the folder that is identified by
     * the SavedItemFolderId element.
     *
     * An item identifier is not returned in the response.
     *
     * Meeting requests are not saved to the folder that is identified by the
     * SavedItemFolderId property. For calendaring, only the save location for
     * calendar items can be specified by the SavedItemFolderId property. You
     * cannot control where a meeting request item is saved. Only the associated
     * calendar items are copied and saved into the folder that is identified by
     * the SavedItemFolderId property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEND_AND_SAVE_COPY = 'SendAndSaveCopy';

    /**
     * The item is sent but no copy is saved in the Sent Items folder.
     *
     * An item identifier is not returned in the response.
     *
     * CreateItem does not support delegate access when the SendOnly option is
     * used because a destination folder cannot be specified with this option.
     * The workaround is to create the item, get the item identifier, and then
     * use the SendItem operation to send the item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEND_ONLY = 'SendOnly';
}
