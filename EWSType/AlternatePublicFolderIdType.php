<?php
/**
 * Definition of the AlternatePublicFolderIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AlternatePublicFolderIdType type
 */
class EWSType_AlternatePublicFolderIdType extends EWSType
{
    /**
     * FolderId property
     *
     * @var string
     */
    public $FolderId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderId',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
