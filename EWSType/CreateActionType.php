<?php
/**
 * Contains EWSType_CreateActionType.
 */

/**
 * Defines the action for uploading an item into a mailbox.
 *
 * @package php-ews\Enumerations
 */
class EWSType_CreateActionType extends EWSType
{
    /**
     * Indicates that a new copy of the original item is uploaded to the
     * mailbox.
     *
     * The ItemId element must not be present if the CreateNew value is used.
     * The new item identifier is returned in the response.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const CREATE = 'CreateNew';

    /**
     * Specifies that the item indicated by the ItemId element will be updated.
     *
     * An error is returned if the ItemId element is not present or if the item
     * does not exist in the folder identified by the ParentFolderId element.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const UPDATE = 'Update';

    /**
     * Indicates that an attempt is first made to update the item.
     *
     * If the item does not exist in the folder specified by the ParentFolderId
     * element, a new item is created.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const UPDATE_OR_CREATE = 'UpdateOrCreate';

    /**
     * Element value.
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
