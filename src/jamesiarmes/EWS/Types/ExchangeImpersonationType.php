<?php
/**
 * Contains ExchangeImpersonationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the account to impersonate within a request.
 *
 * @package jamesiarmes\EWS\Types
 */
class ExchangeImpersonationType extends EWSType
{
    /**
     * Represents an account to impersonate when you are using the
     * ExchangeImpersonation SOAP header.
     *
     * @since Exchange 2007
     *
     * @var ConnectingSIDType
     */
    public $ConnectingSID;
}
