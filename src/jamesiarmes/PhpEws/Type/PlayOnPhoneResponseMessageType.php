<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PlayOnPhoneResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines the response to a request to play a voice mail over the telephone.
 *
 * @package php-ews\Types
 */
class PlayOnPhoneResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the telephone call identifier.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\PhoneCallIdType
     */
    public $PhoneCallId;
}
