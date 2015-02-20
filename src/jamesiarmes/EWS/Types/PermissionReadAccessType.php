<?php
/**
 * Contains PermissionReadAccessType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Indicates whether a user has permission to read items within a folder.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class PermissionReadAccessType extends EWSType
{
    /**
     * Indicates that the user has permission to read all items in the folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const FULL_DETAILS = 'FullDetails';

    /**
     * Indicates that the user does not have permission to read items in the
     * folder.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const NONE = 'None';

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
