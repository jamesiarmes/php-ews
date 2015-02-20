<?php
/**
 * Contains UpdateUserConfigurationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to update a user configuration object.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class UpdateUserConfigurationType extends EWSType
{
    /**
     * Defines a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationType
     */
    public $UserConfiguration;
}
