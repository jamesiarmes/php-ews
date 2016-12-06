<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ReplyBody.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines the out of office (OOF) response that is sent to addresses outside
 * the recipient's domain or trusted domains.
 *
 * @package php-ews\Type
 */
class ReplyBody extends Type
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
