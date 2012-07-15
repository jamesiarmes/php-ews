<?php
/**
 * Definition of the PathToIndexedFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PathToIndexedFieldType type
 */
class EWSType_PathToIndexedFieldType extends EWSType
{
    /**
     * FieldURI property
     *
     * @var EWSType_DictionaryURIType
     */
    public $FieldURI;

    /**
     * FieldIndex property
     *
     * @var string
     */
    public $FieldIndex;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FieldURI',
                'required' => false,
                'type' => 'DictionaryURIType',
            ),
            array(
                'name' => 'FieldIndex',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
