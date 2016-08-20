<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ChangeDescriptionType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Base class for changes to individual properties.
 *
 * @package php-ews\Type
 */
abstract class ChangeDescriptionType extends Type
{
    /**
     * Identifies extended MAPI properties to set.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
