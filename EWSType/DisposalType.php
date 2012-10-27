<?php
/**
 * Contains EWSType_DisposalType.
 */

/**
 * Indicates how items are deleted.
 *
 * @package php-ews\Enumerations
 */
class EWSType_DisposalType extends EWSType
{
    /**
     * Indicates that items are permanently removed from the database.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const HARD_DELETE = 'HardDelete';

    /**
     * Indicates that items are moved to the Deleted Items folder.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';

    /**
     * Indicates that items are moved to the dumpster if the dumpster is
     * enabled.
     *
     * @since Exchange 2010 SP1
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
