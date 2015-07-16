<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\OofState.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Represents a user's Out of Office (OOF) state.
 *
 * @package php-ews\Enumeration
 */
class OofState extends Enumeration
{
    /**
     * The user's OOF setting is currently disabled.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DISABLED = 'Disabled';

    /**
     * The user's OOF setting is currently enabled.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ENABLED = 'Enabled';

    /**
     * The user's OOF setting is scheduled to start at a specific date and end
     * at another specific date.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SCHEDULED = 'Scheduled';
}
