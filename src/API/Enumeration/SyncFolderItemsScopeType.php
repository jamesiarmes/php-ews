<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\SyncFolderItemsScopeType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Defines whether just items or items and folder associated information are
 * returned in a synchronization response.
 *
 * @package php-ews\Enumeration
 */
class SyncFolderItemsScopeType extends Enumeration
{
    /**
     * Specifies that only items in the folder are returned in a synchronization
     * response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NORMAL = 'NormalItems';

    /**
     * Specifies that both items in the folder and folder associated information
     * are returned in a synchronization response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NORMAL_AND_ASSOCIATED = 'NormalAndAssociatedItems';
}
