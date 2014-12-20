<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\DelegateFolderPermissionLevelType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Contains the permissions for a default folder.
 *
 * @package php-ews\Enumeration
 */
class DelegateFolderPermissionLevelType extends Enumeration
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
}
