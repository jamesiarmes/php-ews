<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\FlagStatusType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Represents the flagged status of an item.
 *
 * @package php-ews\Enumeration
 */
class FlagStatusType extends Enumeration
{
    /**
     * Indicates the complete flag status.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const COMPLETE = 'Complete';

    /**
     * Indicates the flagged status.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const FLAGGED = 'Flagged';

    /**
     * Indicates the not-flagged status.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const NOT_FLAGGED = 'NotFlagged';
}
