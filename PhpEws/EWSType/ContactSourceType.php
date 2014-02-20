<?php
/**
 * Definition of the ContactSourceType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ContactSourceType type
 */
class EWSType_ContactSourceType extends EWSType
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
