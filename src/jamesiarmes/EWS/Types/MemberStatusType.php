<?php
/**
 * Contains MemberStatusType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the status of a distribution list member on the server.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class MemberStatusType extends EWSType
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

    /**
     * Element value.
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
