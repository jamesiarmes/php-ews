<?php
/**
 * Definition of the DisposalType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Types of deletion for items and folders
 */
class EWSType_DisposalType extends EWSType
{
    /**
     * Deletes the item irrevocably. Does not move the item to the Deleted Items
     * Folder.
     *
     * @var string
     */
    const HARD_DELETE = 'HardDelete';

    /**
     * Does not actually delete the item, but instead simply moves it to the
     * Deleted Items folder.
     *
     * @var string
     */
    const MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';

    /**
     * "Deletes" the item so that it is no longer visible in the folder, but
     * actually still exists there. Avoid using this because there is nothing
     * that you can do with soft-deleted items from EWS aside from finding them.
     *
     * @var string
     */
    const SOFT_DELETE = 'SoftDelete';

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
