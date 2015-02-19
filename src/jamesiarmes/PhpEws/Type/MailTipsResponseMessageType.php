<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\MailTipsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents mail tips settings.
 *
 * @package php-ews\Types
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
