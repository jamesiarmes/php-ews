<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PhoneCallInformationType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the state information for a phone call.
 *
 * @package php-ews\Type
 */
class PhoneCallInformationType extends Type
{
    /**
     * Specifies the cause of a connection failure.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ConnectionFailureCauseType
     */
    public $ConnectionFailureCause;

    /**
     * Specifies the state for a phone call.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\PhoneCallStateType
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
