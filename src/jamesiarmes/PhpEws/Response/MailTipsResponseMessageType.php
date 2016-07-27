<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\MailTipsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents mail tips settings.
 *
 * @package php-ews\Response
 */
class MailTipsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents values for various types of mail tips.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\MailTips
     */
    public $MailTips;
}
