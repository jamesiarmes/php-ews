<?php
/**
 * Definition of the PathToIndexedFieldType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the PathToIndexedFieldType type
 */
class PathToIndexedFieldType extends PhpEws\EWSType
{
    /**
     * FieldURI property
     *
     * @var DictionaryURIType
     */
    public $FieldURI;

    /**
     * FieldIndex property
     *
     * @var string
     */
    public $FieldIndex;
}
