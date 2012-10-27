<?php
/**
 * Contains EWSType_EmailAddressKeyType.
 */

/**
 * Defines the key for an email address.
 *
 * @package php-ews\Enumerations
 */
class EWSType_EmailAddressKeyType extends EWSType
{
    /**
     * Key for a contacts first email address.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EMAIL_ADDRESS_1 = 'EmailAddress1';

    /**
     * Key for a contacts second email address.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EMAIL_ADDRESS_2 = 'EmailAddress2';

    /**
     * Key for a contacts third email address.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EMAIL_ADDRESS_3 = 'EmailAddress3';

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
