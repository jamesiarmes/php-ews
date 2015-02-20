<?php
/**
 * Contains ReplyBody.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the out of office (OOF) response that is sent to addresses outside
 * the recipient's domain or trusted domains.
 *
 * @package jamesiarmes\EWS\Types
 */
class ReplyBody extends EWSType
{
    /**
     * Specifies the language used in the ExternalReply message.
     *
     * The possible values for this attribute are defined by IETF RFC 3066.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $lang;

    /**
     * Contains the OOF response.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Message;
}
