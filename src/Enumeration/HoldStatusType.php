<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\HoldStatusType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the hold status for a mailbox.
 *
 * @package php-ews\Enumeration
 */
class HoldStatusType extends Enumeration
{
    /**
     * Indicates that the hold on a mailbox has failed.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const FAILED = 'Failed';

    /**
     * Indicates that the mailbox is not on hold.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const NOT_ON_HOLD = 'NotOnHold';

    /**
     * Indicates that the mailbox is on hold.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ON_HOLD = 'OnHold';

    /**
     * Indicates that the mailbox is on a partial hold.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PARTIAL_HOLD = 'PartialHold';

    /**
     * Indicates that a hold on the mailbox is pending.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PENDING = 'Pending';
}
