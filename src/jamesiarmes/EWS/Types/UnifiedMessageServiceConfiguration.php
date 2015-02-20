<?php
/**
 * Contains UnifiedMessageServiceConfiguration.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents service configuration information for the Unified Messaging
 * service.
 *
 * @package jamesiarmes\EWS\Types
 */
class UnifiedMessageServiceConfiguration extends EWSType
{
    /**
     * Identifies the Play-on-Phone dial string.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $PlayOnPhoneDialString;

    /**
     * Indicates whether the Play-on-Phone feature is enabled.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $PlayOnPhoneEnabled;

    /**
     * Indicates whether Unified Messaging is enabled for an account.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $UmEnabled;
}
