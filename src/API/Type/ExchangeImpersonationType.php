<?php
/**
 * Contains EWSType_ExchangeImpersonationType.
 */
/**
 * Represents the account to impersonate within a request.
 *
 * @package php-ews\Types
 */

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

class ExchangeImpersonationType extends Type
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
