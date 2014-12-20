<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\ContactSourceType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Describes whether the contact is located in the Exchange store or Active
 * Directory Domain Services (AD DS).
 *
 * @package php-ews\Enumeration
 */
class ContactSourceType extends Enumeration
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
}
