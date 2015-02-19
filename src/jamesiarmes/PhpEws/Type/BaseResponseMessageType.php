<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BaseResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Base class for responses.
 *
 * @package php-ews\Types
 */
class BaseResponseMessageType extends Type
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
