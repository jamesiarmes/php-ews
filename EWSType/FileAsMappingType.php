<?php
/**
 * Contains EWSType_FileAsMappingType.
 */

/**
 * Defines how to construct what is displayed for a contact.
 *
 * @package php-ews\Enumerations
 */
class EWSType_FileAsMappingType extends EWSType
{
    /**
     * File as mapping for "company".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const COMPANY = 'Company';

    /**
     * File as mapping for "last name, first name".
     *
     * @since Exchnage 2007
     *
     * @var
     */
    const COMPANY_LAST_COMMA_FIRST = 'CompanyLastCommaFirst';

    /**
     * File as mapping for "company last name first name".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const COMPANY_LAST_FIRST = 'CompanyLastFirst';

    /**
     * File as mapping for "company last name first name".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const COMPANY_LAST_SPACE_FIRST = 'CompanyLastSpaceFirst';

    /**
     * File as mapping for "display name".
     *
     * @since Exchnage 2010
     *
     * @var string
     */
    const DISPLAY_NAME = 'DisplayName';

    /**
     * File as mapping to use when no mapping is defined.
     *
     * @since Exchnage 2010
     *
     * @var string
     */
    const EMPTY_MAPPING = 'Empty';

    /**
     * File as mapping for "first name".
     *
     * @since Exchnage 2010
     *
     * @var string
     */
    const FIRST_NAME = 'FirstName';

    /**
     * File as mapping for "first name last name".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const FIRST_SPACE_LAST = 'FirstSpaceLast';

    /**
     * File as mapping for "last name, first name".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const LAST_COMMA_FIRST = 'LastCommaFirst';

    /**
     * File as mapping for "last name, first name company".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const LAST_COMMA_FIRST_COMPANY = 'LastCommaFirstCompany';

    /**
     * File as mapping for "last name first name".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const LAST_FIRST = 'LastFirst';

    /**
     * File as mapping for "last name first name company".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const LAST_FIRST_COMPANY = 'LastFirstCompany';

    /**
     * File as mapping for "last name first name middle name suffix".
     *
     * @since Exchnage 2010
     *
     * @var string
     */
    const LAST_FIRST_MIDDLE_SUFFIX = 'LastFirstMiddleSuffix';

    /**
     * File as mapping for "last name first name suffix".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const LAST_FIRST_SUFFIX = 'LastFirstSuffix';

    /**
     * File as mapping for "last name".
     *
     * @since Exchnage 2010
     *
     * @var string
     */
    const LAST_NAME = 'LastName';

    /**
     * File as mapping for "last name first name".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const LAST_SPACE_FIRST = 'LastSpaceFirst';

    /**
     * File as mapping for "lasy name first name company".
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const LAST_SPACE_FIRST_COMPANY = 'LastSpaceFirstCompany';

    /**
     * File as mapping to use when no mapping is desired.
     *
     * @since Exchnage 2007
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Value of the desired mapping. Should be one of the constants from the
     * EWSType_FileAsMappingType class.
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
