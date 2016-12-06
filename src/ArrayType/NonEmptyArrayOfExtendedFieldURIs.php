<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfExtendedFieldURIs.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines the extended properties used for a request.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfExtendedFieldURIs extends ArrayType
{
    /**
     * Specifies an extended property for the Unified Contact Store.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\PathToExtendedFieldType[]
     */
    public $ExtendedProperty = array();
}
