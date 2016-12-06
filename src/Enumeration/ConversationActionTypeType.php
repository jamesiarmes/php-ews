<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ConversationActionTypeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Contains the action to perform on a conversation specified by a
 * ConversationId.
 *
 * @package php-ews\Enumeration
 */
class ConversationActionTypeType extends Enumeration
{
    /**
     * The current items and new items in the conversation will automatically be
     * set with the categories identified by the Categories property.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const ALWAYS_CATEGORIZE = 'AlwaysCategorize';

    /**
     * The current items and new items in the conversation will automatically be
     * deleted.
     *
     * The deletion mode is set by the DeleteType property.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const ALWAYS_DELETE = 'AlwaysDelete';

    /**
     * The current items and new items in the conversation will automatically be
     * moved to the folder identified by the DestinationFolderId property.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const ALWAYS_MOVE = 'AlwaysMove';

    /**
     * The current items in the conversation will be copied to the folder
     * identified by the DestinationFolderId property.
     *
     * Subsequent items in the conversation will not be copied.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const COPY = 'Copy';

    /**
     * The current items in the conversation will be deleted.
     *
     * Subsequent items in the conversation will not be deleted. The deletion
     * mode is set by the DeleteType property.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const DELETE = 'Delete';

    /**
     * The current items in the conversation will be moved to the folder
     * identified by the DestinationFolderId property.
     *
     * Subsequent items in the conversation will not be moved.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const MOVE = 'Move';

    /**
     * The current items in the conversation will have their read state set.
     *
     * The read state is set by the IsRead property.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const SET_READ_STATE = 'SetReadState';
}
