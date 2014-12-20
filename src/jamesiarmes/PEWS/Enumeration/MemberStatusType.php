<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\MemberStatusType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Represents the status of a distribution list member on the server.
 *
 * @package php-ews\Enumeration
 */
class MemberStatusType extends Enumeration
{
    /**
     * Referenced object is not available.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DEMOTED = 'Demoted';

    /**
     * Member information in a distribution list is in sync with the referenced
     * object.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NORMAL = 'Normal';

    /**
     * Member information is invalid or unrecognized.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNRECOGNIZED = 'Unrecognized';
}
