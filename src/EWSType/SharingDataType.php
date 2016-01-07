<?php
/**
 * Contains EWSType_SharingDataType.
 */

/**
 * Describes the type of data that is shared by a shared folder.
 *
 * @package php-ews\Enumerations
 */
class EWSType_SharingDataType extends EWSType
{
    /**
     * Indicates that the shared folder contains calendar information.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CALENDAR = 'Calendar';

    /**
     * Indicates that the shared folder contains contact information.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONTACTS = 'Contacts';

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
