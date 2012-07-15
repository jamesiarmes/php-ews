<?php
/**
 * Definition of the FolderResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FolderResponseShapeType type
 */
class EWSType_FolderResponseShapeType extends EWSType
{
    /**
     * BaseShape property
     *
     * @var EWSType_DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * AdditionalProperties property
     *
     * @var EWSType_NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'BaseShape',
                'required' => false,
                'type' => 'DefaultShapeNamesType',
            ),
            array(
                'name' => 'AdditionalProperties',
                'required' => false,
                'type' => 'NonEmptyArrayOfPathsToElementType',
            ),
        );
    }
}
