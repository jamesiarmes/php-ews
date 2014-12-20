<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\DistinguishedUserType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Identifies Anonymous and Default user accounts for delegate access.
 *
 * @package php-ews\Enumeration
 */
class DistinguishedUserType extends Enumeration
{
    /**
     * Describes the delegate access settings that anonymous users have on the
     * principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const ANONYMOUS = 'Anonymous';

    /**
     * Describes the default setting for delegate users who are added to the
     * principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DEFAULT_USER = 'Default';
}
