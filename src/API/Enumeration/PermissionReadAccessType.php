<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\PermissionReadAccessType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Indicates whether a user has permission to read items within a folder.
 *
 * @package php-ews\Enumeration
 */
class PermissionReadAccessType extends Enumeration
{
    /**
     * Indicates that the user has permission to read all items in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const FULL_DETAILS = 'FullDetails';

    /**
     * Indicates that the user does not have permission to read items in the
     * folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const NONE = 'None';
}
