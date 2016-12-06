<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfDelegateUserResponseMessageType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use jamesiarmes\PhpEws\ArrayType;

/**
 * Contains the response messages for an Exchange Web Services delegate
 * management request.
 *
 * @package php-ews\Array
 */
class ArrayOfDelegateUserResponseMessageType extends ArrayType
{
    /**
     * Contains response messages for delegate management operations.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Response\DelegateUserResponseMessageType[]
     */
    public $DelegateUserResponseMessageType = array();
}
