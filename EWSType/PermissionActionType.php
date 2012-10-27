<?php
/**
 * Contains EWSType_PermissionActionType.
 */

/**
 * Indicates which items in a folder a user has permission to perform an action
 * on.
 *
 * @package php-ews\Enumerations
 */
class EWSType_PermissionActionType extends EWSType
{
    /**
     * Indicates that the user has permission to perform the action on all items
     * in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const ALL = 'All';

    /**
     * Indicates that the user does not have permission to perform the action on
     * items in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Indicates that the user has permission to perform the action on the items
     * that the user owns in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const OWNED = 'Owned';

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
