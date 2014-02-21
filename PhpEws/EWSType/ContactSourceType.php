<?php
/**
 * Definition of the ContactSourceType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ContactSourceType type
 */
class ContactSourceType extends PhpEws\EWSType
{
    /**
     * Contact is stored in Active Directory.
     *
     * @var string
     */
    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    /**
     * Contact is stored in the Exchange Store.
     *
     * @var string
     */
    const EXCHANGE_STORE = 'Store';
}
