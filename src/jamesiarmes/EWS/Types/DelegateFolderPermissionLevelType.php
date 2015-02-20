<?php
/**
 * Contains DelegateFolderPermissionLevelType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Contains the permissions for a default folder.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class DelegateFolderPermissionLevelType extends EWSType
{
    /**
     * The delegate user can read and create items in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const AUTHOR = 'Author';

    /**
     * The delegate user has custom access permissions to the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const CUSTOM = 'Custom';

    /**
     * The delegate user can read, create, and modify items in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const EDITOR = 'Editor';

    /**
     * The delegate user has no access permissions to the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * The delegate user can read items in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const REVIEWER = 'Reviewer';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
