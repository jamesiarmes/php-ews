<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\BaseDelegateResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Base class for delegate response messages.
 *
 * @package php-ews\Response
 */
abstract class BaseDelegateResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
