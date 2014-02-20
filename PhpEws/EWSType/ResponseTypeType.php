<?php
/**
 * Definition of the ResponseTypeType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ResponseTypeType type
 */
class EWSType_ResponseTypeType extends EWSType
{
    /**
     * Response type indicating that a request has been accepted.
     *
     * @var string
     */
    const ACCEPT = 'Accept';

    /**
     * Response type indicating that a request has been declined.
     *
     * @var string
     */
    const DECLNE = 'Decline';

    /**
     * Response type indicating that no reponse has been received.
     *
     * @var string
     */
    const NONE = 'NoResponseReceived';

    /**
     * Response type indicating that the attendee is the organizer.
     *
     * @var string
     */
    const ORGANIZER = 'Organizer';

    /**
     * Response type indicating that a request has been tentatively accepted.
     *
     * @var string
     */
    const TENTATIVE = 'Tentative';

    /**
     * Response type indicating that the reponse is unknown.
     *
     * @var string
     */
    const UNKNOWN = 'Unknown';

    /**
     * Value of the element.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
