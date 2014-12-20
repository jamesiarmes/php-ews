<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ConflictResolutionType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the type of conflict resolution to try during an update.
 *
 * @package php-ews\Enumeration
 */
class ConflictResolutionType extends Enumeration
{
    /**
     * If there is a conflict, the update operation will overwrite information.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ALWAYS_OVERWRITE = 'AlwaysOverwrite';

    /**
     * The update operation automatically resolves any conflict.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const AUTO_RESOLVE = 'AutoResolve';

    /**
     * If there is a conflict, the update operation fails and an error is
     * returned.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NEVER_OVERWRITE = 'NeverOverwrite';
}
