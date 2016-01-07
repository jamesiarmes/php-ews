<?php
/**
 * Contains EWSType_ExchangeImpersonationType.
 */

/**
 * Represents the account to impersonate within a request.
 *
 * @package php-ews\Types
 */
class EWSType_ExchangeImpersonationType extends EWSType
{
    /**
     * Represents an account to impersonate when you are using the
     * ExchangeImpersonation SOAP header.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ConnectingSIDType
     */
    public $ConnectingSID;
}
