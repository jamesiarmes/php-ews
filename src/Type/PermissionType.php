<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PermissionType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines the access that a user has to a folder.
 *
 * @package php-ews\Type
 */
class PermissionType extends BasePermissionType
{
    /**
     * Represents the combination of permissions that a user has on a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\PermissionLevelType
     */
    public $PermissionLevel;

    /**
     * Indicates whether a user has permission to read items within a folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\PermissionReadAccessType
     */
    public $ReadItems;
}
