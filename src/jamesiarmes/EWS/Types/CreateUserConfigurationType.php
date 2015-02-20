<?php
/**
 * Contains CreateUserConfigurationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a request to create a user configuration object.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class CreateUserConfigurationType extends EWSType
{
    /**
     * Represents a single user configuration object.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationType
     */
    public $UserConfiguration;
}
