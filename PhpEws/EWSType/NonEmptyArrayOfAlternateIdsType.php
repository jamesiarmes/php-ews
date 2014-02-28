<?php
/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 */
class NonEmptyArrayOfAlternateIdsType extends PhpEws\EWSType
{
    /**
     * AlternateId property
     *
     * @var AlternateIdType
     */
    public $AlternateId;

    /**
     * AlternatePublicFolderId property
     *
     * @var AlternatePublicFolderIdType
     */
    public $AlternatePublicFolderId;

    /**
     * AlternatePublicFolderItemId property
     *
     * @var AlternatePublicFolderItemIdType
     */
    public $AlternatePublicFolderItemId;
}
