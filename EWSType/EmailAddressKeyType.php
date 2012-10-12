<?php
/**
 * Definition of the EmailAddressKeyType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Email address key type
 */
class EWSType_EmailAddressKeyType extends EWSType
{
    /**
     * Key for a contacts first email address
     *
     * @var string
     */
    const EMAIL_ADDRESS_1 = 'EmailAddress1';

    /**
     * Key for a contacts second email address
     *
     * @var string
     */
    const EMAIL_ADDRESS_2 = 'EmailAddress2';

    /**
     * Key for a contacts third email address
     *
     * @var string
     */
    const EMAIL_ADDRESS_3 = 'EmailAddress3';

    /**
     * Value of the desired mapping. Should be one of the constants from the
     * EWSType_EmailAddressKeyType class.
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
