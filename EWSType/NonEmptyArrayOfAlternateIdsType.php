<?php
/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 */
class EWSType_NonEmptyArrayOfAlternateIdsType extends EWSType
{
    /**
     * AlternateId property
     *
     * @var EWSType_AlternateIdType
     */
    public $AlternateId;

    /**
     * AlternatePublicFolderId property
     *
     * @var EWSType_AlternatePublicFolderIdType
     */
    public $AlternatePublicFolderId;

    /**
     * AlternatePublicFolderItemId property
     *
     * @var EWSType_AlternatePublicFolderItemIdType
     */
    public $AlternatePublicFolderItemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'AlternateId',
                'required' => false,
                'type' => 'AlternateIdType',
            ),
            array(
                'name' => 'AlternatePublicFolderId',
                'required' => false,
                'type' => 'AlternatePublicFolderIdType',
            ),
            array(
                'name' => 'AlternatePublicFolderItemId',
                'required' => false,
                'type' => 'AlternatePublicFolderItemIdType',
            ),
        );
    }
}
