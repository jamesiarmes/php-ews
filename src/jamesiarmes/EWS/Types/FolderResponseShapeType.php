<?php
/**
 * Contains FolderResponseShapeType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the folder properties to include in a GetFolder, FindFolder, or
 * SyncFolderHierarchy response.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Create a common ResponseShapeType.
 */
class FolderResponseShapeType extends EWSType
{
    /**
     * Identifies additional properties to return in a response.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Identifies the basic configuration of properties to return in a response.
     *
     * @since Exchange 2007
     *
     * @var DefaultShapeNamesType
     */
    public $BaseShape;
}
