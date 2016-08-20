<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetMailTipsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the response message for a GetMailTips Operation.
 *
 * @package php-ews\Response
 */
class GetMailTipsResponseMessageType extends ResponseMessageType
{
    /**
     * Represents a list of mail tips response messages.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfMailTipsResponseMessageType
     */
    public $ResponseMessages;
}
