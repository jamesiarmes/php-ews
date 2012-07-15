<?php
/**
 * Definition of the AttachmentIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AttachmentIdType type
 */
class EWSType_AttachmentIdType extends EWSType
{
    /**
     * RootItemId property
     *
     * @var string
     */
    public $RootItemId;

    /**
     * RootItemChangeKey property
     *
     * @var string
     */
    public $RootItemChangeKey;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'RootItemId',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'RootItemChangeKey',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
