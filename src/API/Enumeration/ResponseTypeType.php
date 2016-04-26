<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\ResponseTypeType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Identifies the type of a response that is received.
 *
 * @package php-ews\Enumeration
 */
class ResponseTypeType extends Enumeration
{
    /**
     * Response type indicating that a request has been accepted.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACCEPT = 'Accept';

    /**
     * Response type indicating that a request has been declined.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DECLNE = 'Decline';

    /**
     * Response type indicating that no reponse has been received.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NONE = 'NoResponseReceived';

    /**
     * Response type indicating that the attendee is the organizer.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ORGANIZER = 'Organizer';

    /**
     * Response type indicating that a request has been tentatively accepted.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TENTATIVE = 'Tentative';

    /**
     * Response type indicating that the reponse is unknown.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNKNOWN = 'Unknown';
}
