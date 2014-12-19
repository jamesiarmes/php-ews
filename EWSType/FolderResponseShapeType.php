<?php
/**
 * Contains EWSType_FolderResponseShapeType.
 */

/**
 * Defines the folder properties to include in a GetFolder, FindFolder, or
 * SyncFolderHierarchy response.
 *
 * @package php-ews\Types
 *
 * @todo Create a common ResponseShapeType.
 */
class EWSType_FolderResponseShapeType extends EWSType
{
    /**
     * Identifies additional properties to return in a response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the basic configuration of properties to return in a response.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DefaultShapeNamesType
     */
    public $BaseShape;
}
