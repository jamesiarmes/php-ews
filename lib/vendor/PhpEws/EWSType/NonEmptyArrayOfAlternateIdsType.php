<?php
/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 */
class NonEmptyArrayOfAlternateIdsType extends EWSType
{
    /**
     * AlternateId property
     *
     * @var EWSType_AlternateIdType
     */
    public $AlternateId;

    /**
     * AlternatePublicFolderId property
     *
     * @var EWSType_AlternatePublicFolderIdType
     */
    public $AlternatePublicFolderId;

    /**
     * AlternatePublicFolderItemId property
     *
     * @var EWSType_AlternatePublicFolderItemIdType
     */
    public $AlternatePublicFolderItemId;
}
