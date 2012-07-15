<?php
/**
 * Definition of the DeleteAttachmentResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the DeleteAttachmentResponseMessageType type
 */
class EWSType_DeleteAttachmentResponseMessageType extends EWSType
{
    /**
     * RootItemId property
     *
     * @var EWSType_RootItemIdType
     */
    public $RootItemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'RootItemId',
                'required' => false,
                'type' => 'RootItemIdType',
            ),
        );
    }
}
