<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 */
class NonEmptyArrayOfAlternateIdsType extends DataType
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
