<?php
/**
 * Definition of the BaseDelegateResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the BaseDelegateResponseMessageType type
 */
class BaseDelegateResponseMessageType extends PhpEws\EWSType
{
    /**
     * ResponseMessages property
     *
     * @var ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
}
