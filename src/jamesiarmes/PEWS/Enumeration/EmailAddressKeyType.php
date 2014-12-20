<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\EmailAddressKeyType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Defines the key for an email address.
 *
 * @package php-ews\Enumeration
 */
class EmailAddressKeyType extends Enumeration
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
}
