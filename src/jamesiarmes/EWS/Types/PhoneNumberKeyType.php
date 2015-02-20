<?php
/**
 * Contains PhoneNumberKeyType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the key for a phone number.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class PhoneNumberKeyType extends EWSType
{
    /**
     * Phone number key for assistant phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ASSISTANT_PHONE = 'AssistantPhone';

    /**
     * Phone number key for business fax number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BUSINESS_FAX = 'BusinessFax';

    /**
     * Phone number key for business phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BUSINESS_PHONE = 'BusinessPhone';

    /**
     * Phone number key for second business phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BUSINESS_PHONE_2 = 'BusinessPhone2';

    /**
     * Phone number key for callback.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALLBACK = 'Callback';

    /**
     * Phone number key for car phone.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CAR_PHONE = 'CarPhone';

    /**
     * Phone number key for company main phone.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const COMPANY_MAIN_PHONE = 'CompanyMainPhone';

    /**
     * Phone number key for home fax number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HOME_FAX = 'HomeFax';

    /**
     * Phone number key for home phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HOME_PHONE = 'HomePhone';

    /**
     * Phone number key for second home phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HOME_PHONE_2 = 'HomePhone2';

    /**
     * Phone number key for ISDN line.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ISDN = 'Isdn';

    /**
     * Phone number key for mobile phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MOBILE_PHONE = 'MobilePhone';

    /**
     * Phone number key for other fax number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OTHER_FAX = 'OtherFax';

    /**
     * Phone number key for other phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OTHER_PHONE = 'OtherTelephone';

    /**
     * Phone number key for pager.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PAGER = 'Pager';

    /**
     * Phone number key for primary phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PRIMARY_PHONE = 'PrimaryPhone';

    /**
     * Phone number key for radio phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RADIO_PHONE = 'RadioPhone';

    /**
     * Phone number key for telex.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TELEX = 'Telex';

    /**
     * Phone number key for TTY TTD phone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TTY_TTD_PHONE = 'TtyTtdPhone';

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
