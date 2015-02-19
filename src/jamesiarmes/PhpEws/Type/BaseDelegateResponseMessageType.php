<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BaseDelegateResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Base class for delegate response messages.
 *
 * @package php-ews\Types
 */
abstract class BaseDelegateResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the response messages for an Exchange Web Services delegate
     * management request.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
