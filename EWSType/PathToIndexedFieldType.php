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
}
