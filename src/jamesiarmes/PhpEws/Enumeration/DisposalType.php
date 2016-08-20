<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\DisposalType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Indicates how items are deleted.
 *
 * @package php-ews\Enumeration
 */
class DisposalType extends Enumeration
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
}
