<?php
/**
 * Definition of the ReplyBody type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ReplyBody type
 */
class ReplyBody extends EWSType
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
     * @var EWSType_UNKNOWN
     */
    public $lang;
}
