<?php
/**
 * Definition of the PhoneNumberKeyType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Phone number key type
 */
class EWSType_PhoneNumberKeyType extends EWSType
{
    /**
     * Phone number key for assistant phone number
     *
     * @var string
     */
    const ASSISTANT_PHONE = 'AssistantPhone';

    /**
     * Phone number key for business fax number
     *
     * @var string
     */
    const BUSINESS_FAX = 'BusinessFax';

    /**
     * Phone number key for business phone number
     *
     * @var string
     */
    const BUSINESS_PHONE = 'BusinessPhone';

    /**
     * Phone number key for second business phone number
     *
     * @var string
     */
    const BUSINESS_PHONE_2 = 'BusinessPhone2';

    /**
     * Phone number key for callback
     *
     * @var string
     */
    const CALLBACK = 'Callback';

    /**
     * Phone number key for car phone
     *
     * @var string
     */
    const CAR_PHONE = 'CarPhone';

    /**
     * Phone number key for company main phone
     *
     * @var string
     */
    const COMPANY_MAIN_PHONE = 'CompanyMainPhone';

    /**
     * Phone number key for home fax number
     *
     * @var string
     */
    const HOME_FAX = 'HomeFax';

    /**
     * Phone number key for home phone number
     *
     * @var string
     */
    const HOME_PHONE = 'HomePhone';

    /**
     * Phone number key for second home phone number
     *
     * @var string
     */
    const HOME_PHONE_2 = 'HomePhone2';

    /**
     * Phone number key for ISDN line
     *
     * @var string
     */
    const ISDN = 'Isdn';

    /**
     * Phone number key for mobile phone number
     *
     * @var string
     */
    const MOBILE_PHONE = 'MobilePhone';

    /**
     * Phone number key for other fax number
     *
     * @var string
     */
    const OTHER_FAX = 'OtherFax';

    /**
     * Phone number key for other phone number
     *
     * @var string
     */
    const OTHER_PHONE = 'OtherTelephone';

    /**
     * Phone number key for pager
     *
     * @var string
     */
    const PAGER = 'Pager';

    /**
     * Phone number key for primary phone number
     *
     * @var string
     */
    const PRIMARY_PHONE = 'PrimaryPhone';

    /**
     * Phone number key for radio phone number
     *
     * @var string
     */
    const RADIO_PHONE = 'RadioPhone';

    /**
     * Phone number key for telex
     *
     * @var string
     */
    const TELEX = 'Telex';

    /**
     * Phone number key for TTY TTD phone number
     *
     * @var string
     */
    const TTY_TTD_PHONE = 'TtyTtdPhone';

    /**
     * Value of the desired mapping. Should be one of the constants from the
     * EWSType_PhoneNumberKeyType class.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
