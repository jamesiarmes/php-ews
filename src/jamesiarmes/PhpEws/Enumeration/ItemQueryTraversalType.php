<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ItemQueryTraversalType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Types of sub-tree traversal for deletion and enumeration.
 *
 * @package php-ews\Enumeration
 */
class ItemQueryTraversalType extends Enumeration
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
}
