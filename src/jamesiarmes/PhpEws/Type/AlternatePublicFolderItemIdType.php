<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AlternatePublicFolderItemIdType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Describes a public folder item identifier to convert to another identifier
 * format.
 *
 * @package php-ews\Type
 */
class AlternatePublicFolderItemIdType extends AlternatePublicFolderIdType
{
    /**
     * Identifier the public folder item to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $ItemId;
}
