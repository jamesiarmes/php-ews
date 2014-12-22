<?php
/**
 * Contains EWSType_ContactSourceType.
 */

/**
 * Describes whether the contact is located in the Exchange store or Active
 * Directory Domain Services (AD DS).
 *
 * @package php-ews\Enumerations
 */
class EWSType_ContactSourceType extends EWSType
{
    /**
     * Indicates that the contact is stored in Active Directory.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    /**
     * Indicates that the contact is stored in the Exchange Store.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EXCHANGE_STORE = 'Store';

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
