<?php
/**
 * Definition of the DeleteAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the DeleteAttachmentType type
 */
class EWSType_DeleteAttachmentType extends EWSType
{
    /**
     * AttachmentIds property
     *
     * @var EWSType_NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'AttachmentIds',
                'required' => false,
                'type' => 'NonEmptyArrayOfRequestAttachmentIdsType',
            ),
        );
    }
}
