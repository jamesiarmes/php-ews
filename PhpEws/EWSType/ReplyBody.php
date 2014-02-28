<?php
/**
 * Definition of the ReplyBody type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ReplyBody type
 */
class ReplyBody extends PhpEws\EWSType
{
    /**
     * Message property
     *
     * @var string
     */
    public $Message;

    /**
     * lang property
     *
     * @var UNKNOWN
     */
    public $lang;
}
