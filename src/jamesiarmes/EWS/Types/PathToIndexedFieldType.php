<?php
/**
 * Contains PathToIndexedFieldType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies individual members of a dictionary.
 *
 * @package jamesiarmes\EWS\Types
 */
class PathToIndexedFieldType extends EWSType
{
    /**
     * Identifies the member of the dictionary to return.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FieldIndex;

    /**
     * FieldURI property
     *
     * @since Exchange 2007
     *
     * @var DictionaryURIType
     */
    public $FieldURI;
}
