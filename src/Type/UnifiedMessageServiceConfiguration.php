<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UnifiedMessageServiceConfiguration.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents service configuration information for the Unified Messaging
 * service.
 *
 * @package php-ews\Type
 */
class UnifiedMessageServiceConfiguration extends ServiceConfiguration
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
