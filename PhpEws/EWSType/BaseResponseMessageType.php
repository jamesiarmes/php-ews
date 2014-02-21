<?php
/**
 * Definition of the BaseResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the BaseResponseMessageType type
 */
class BaseResponseMessageType extends PhpEws\EWSType
{
    /**
     * ResponseMessages property
     *
     * @var ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
