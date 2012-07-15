<?php
/**
 * Definition of the CreateAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CreateAttachmentType type
 */
class EWSType_CreateAttachmentType extends EWSType
{
    /**
     * ParentItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ParentItemId;

    /**
     * Attachments property
     *
     * @var EWSType_NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ParentItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
            array(
                'name' => 'Attachments',
                'required' => false,
                'type' => 'NonEmptyArrayOfAttachmentsType',
            ),
        );
    }
}
