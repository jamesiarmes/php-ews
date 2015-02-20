<?php
/**
 * Contains PhoneCallInformationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the state information for a phone call.
 *
 * @package jamesiarmes\EWS\Types
 */
class PhoneCallInformationType extends EWSType
{
    /**
     * Specifies the cause of a connection failure.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var ConnectionFailureCauseType
     */
    public $ConnectionFailureCause;

    /**
     * Specifies the state for a phone call.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var PhoneCallStateType
     */
    public $PhoneCallState;

    /**
     * Specifies the SIP response code.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $SIPResponseCode;

    /**
     * Specifies the SIP response text.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $SIPResponseText;
}
