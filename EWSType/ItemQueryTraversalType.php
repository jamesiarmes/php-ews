<?php
/**
 * Contains EWSType_ItemQueryTraversalType.
 */

/**
 * Defines how a FindItem search is performed.
 *
 * @package php-ews\Enumerations
 */
class EWSType_ItemQueryTraversalType extends EWSType
{
    /**
     * Returns only the identities of associated items in the folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ASSOCIATED = 'Associated';

    /**
     * Returns only the identities of items in the folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SHALLOW = 'Shallow';

    /**
     * Returns only the identities of items that are in a folder's dumpster.
     *
     * Note that a soft-deleted traversal combined with a search restriction
     * will result in zero items returned even if there are items that match the
     * search criteria.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SOFT_DELETED = 'SoftDeleted';

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
