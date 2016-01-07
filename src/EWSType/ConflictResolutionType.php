<?php
/**
 * Contains EWSType_ConflictResolutionType.
 */

/**
 * Defines the type of conflict resolution to try during an update.
 *
 * @package php-ews\Enumerations
 */
class EWSType_ConflictResolutionType extends EWSType
{
    /**
     * If there is a conflict, the update operation will overwrite information.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ALWAYS_OVERWRITE = 'AlwaysOverwrite';

    /**
     * The update operation automatically resolves any conflict.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const AUTO_RESOLVE = 'AutoResolve';

    /**
     * If there is a conflict, the update operation fails and an error is
     * returned.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NEVER_OVERWRITE = 'NeverOverwrite';

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
