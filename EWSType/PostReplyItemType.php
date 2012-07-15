<?php
/**
 * Definition of the PostReplyItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PostReplyItemType type
 */
class EWSType_PostReplyItemType extends EWSType
{
    /**
     * NewBodyContent property
     *
     * @var EWSType_BodyType
     */
    public $NewBodyContent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'NewBodyContent',
                'required' => false,
                'type' => 'BodyType',
            ),
        );
    }
}
