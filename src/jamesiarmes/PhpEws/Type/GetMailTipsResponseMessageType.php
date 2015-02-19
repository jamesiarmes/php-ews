<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetMailTipsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the response message for a GetMailTips Operation.
 *
 * @package php-ews\Types
 */
class GetMailTipsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents a list of mail tips response messages.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfMailTipsResponseMessageType
     */
    public $ResponseMessages;
}
