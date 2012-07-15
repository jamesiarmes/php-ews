<?php
/**
 * Definition of the AttachmentInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AttachmentInfoResponseMessageType type
 */
class EWSType_AttachmentInfoResponseMessageType extends EWSType
{
    /**
     * Attachments property
     *
     * @var EWSType_ArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Attachments',
                'required' => false,
                'type' => 'ArrayOfAttachmentsType',
            ),
        );
    }
}
