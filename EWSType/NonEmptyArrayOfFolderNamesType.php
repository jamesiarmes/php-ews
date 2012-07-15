<?php
/**
 * Definition of the NonEmptyArrayOfFolderNamesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfFolderNamesType type
 */
class EWSType_NonEmptyArrayOfFolderNamesType extends EWSType
{
    /**
     * FolderName property
     *
     * @var string
     */
    public $FolderName;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FolderName',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
