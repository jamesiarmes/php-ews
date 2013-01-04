<?php
/**
 * Definition of the PathToIndexedFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PathToIndexedFieldType type
 */
class PathToIndexedFieldType extends EWSType
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
