<?php
/**
 * Definition of the ArrayOfAttachmentsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfAttachmentsType type
 */
class EWSType_ArrayOfAttachmentsType extends EWSType
{
    /**
     * ItemAttachment property
     *
     * @var EWSType_ItemAttachmentType
     */
    public $ItemAttachment;

    /**
     * FileAttachment property
     *
     * @var EWSType_FileAttachmentType
     */
    public $FileAttachment;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ItemAttachment',
                'required' => false,
                'type' => 'ItemAttachmentType',
            ),
            array(
                'name' => 'FileAttachment',
                'required' => false,
                'type' => 'FileAttachmentType',
            ),
        );
    }
}
