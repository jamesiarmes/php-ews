<?php
/**
 * Contains EWSType_DistinguishedUserType.
 */

/**
 * Identifies Anonymous and Default user accounts for delegate access.
 *
 * @package php-ews\Enumerations
 */
class EWSType_DistinguishedUserType extends EWSType
{
    /**
     * Describes the delegate access settings that anonymous users have on the
     * principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const ANONYMOUS = 'Anonymous';

    /**
     * Describes the default setting for delegate users who are added to the
     * principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DEFAULT_USER = 'Default';

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
