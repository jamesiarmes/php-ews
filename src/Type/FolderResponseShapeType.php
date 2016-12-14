<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FolderResponseShapeType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines the folder properties to include in a GetFolder, FindFolder, or
 * SyncFolderHierarchy response.
 *
 * @package php-ews\Type
 *
 * @todo Create a common ResponseShapeType.
 */
class FolderResponseShapeType extends Type
{
    /**
     * Identifies additional properties to return in a response.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the basic configuration of properties to return in a response.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType
     */
    public $BaseShape;
}
