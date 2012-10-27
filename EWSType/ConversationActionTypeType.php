<?php
/**
 * Contains EWSType_ConversationActionTypeType
 */

/**
 * Contains the action to perform on a conversation specified by a
 * ConversationId.
 *
 * @package php-ews\Enumerations
 */
class EWSType_ConversationActionTypeType extends EWSType
{
    /**
     * The current items and new items in the conversation will automatically be
     * set with the categories identified by the Categorie property.
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

    /**
     * Indicates which action will be performed on a conversation.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
