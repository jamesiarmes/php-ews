<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\PlayOnPhoneResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to a request to play a voice mail over the telephone.
 *
 * @package php-ews\Response
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
