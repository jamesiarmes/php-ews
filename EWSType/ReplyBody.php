<?php
/**
 * Definition of the ReplyBody type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ReplyBody type
 */
class EWSType_ReplyBody extends EWSType
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Message',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'lang',
                'required' => false,
                'type' => 'UNKNOWN',
            ),
        );
    }
}
