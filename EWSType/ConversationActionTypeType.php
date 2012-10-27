<?php
/**
 * Contains the action to perform on the conversation specified by a
 * ConversationId.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ConversationActionTypeType type.
 */
class EWSType_ConversationActionTypeType extends EWSType
{
    /**
     * The current items and new items in the conversation will automatically be
     * set with the categories identified by the Categorie element.
     *
     * @var string
     */
    const ALWAYS_CATEGORIZE = 'AlwaysCategorize';

    /**
     * The current items and new items in the conversation will automatically be
     * deleted. The deletion mode is set by the DeleteType element.
     *
     * @var string
     */
    const ALWAYS_DELETE = 'AlwaysDelete';

    /**
     * The current items and new items in the conversation will automatically be
     * moved to the folder identified by the DestinationFolderId element.
     *
     * @var string
     */
    const ALWAYS_MOVE = 'AlwaysMove';

    /**
     * The current items in the conversation will be copied to the folder
     * identified by the DestinationFolderId element. Subsequent items in the
     * conversation will not be copied.
     *
     * @var string
     */
    const COPY = 'Copy';

    /**
     * The current items in the conversation will be deleted. Subsequent items
     * in the conversation will not be deleted. The deletion mode is set by the
     * DeleteType element.
     *
     * @var string
     */
    const DELETE = 'Delete';

    /**
     * The current items in the conversation will be moved to the folder
     * identified by the DestinationFolderId element. Subsequent items in the
     * conversation will not be moved.
     *
     * @var string
     */
    const MOVE = 'Move';

    /**
     * The current items in the conversation will have their read state set. The
     * read state is set by the IsRead element.
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
