<?php
/**
 * Definition of the BaseDelegateResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the BaseDelegateResponseMessageType type
 */
class BaseDelegateResponseMessageType extends EWSType
{
    /**
     * ResponseMessages property
     *
     * @var EWSType_ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
