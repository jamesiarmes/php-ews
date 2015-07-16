<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\DictionaryURIType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Identifies the dictionary that contains the member to return.
 *
 * @package php-ews\Enumeration
 */
class DictionaryURIType extends Enumeration
{
    /**
     * Represents the e-mail address of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_EMAIL_ADDRESS = 'contacts:EmailAddress';

    /**
     * Represents the instant messaging address of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_IM_ADDRESS = 'contacts:ImAddress';

    /**
     * Represents the phone number of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_PHONE_NUMBER = 'contacts:PhoneNumber';

    /**
     * Represents the city of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_PHYSICAL_ADDRESS_CITY = 'contacts:PhysicalAddress:City';

    /**
     * Represents the country of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_PHYSICAL_ADDRESS_COUNTRY = 'contacts:PhysicalAddress:Country';

    /**
     * Represents the postal code of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_PHYSICAL_ADDRESS_POSTAL_CODE = 'contacts:PhysicalAddress:PostalCode';

    /**
     * Represents the state of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_PHYSICAL_ADDRESS_STATE = 'contacts:PhysicalAddress:State';

    /**
     * Represents the street address of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_PHYSICAL_ADDRESS_STREET = 'contacts:PhysicalAddress:Street';

    /**
     * Represents a member of a distribution list.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DISTRIBUTION_LIST_MEMBERS_MEMBER = 'distributionlist:Members:Member';

    /**
     * Represents the message header of an item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_INTERNET_MESSAGE_HEADER = 'item:InternetMessageHeader';
}
