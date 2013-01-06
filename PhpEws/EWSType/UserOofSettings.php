<?php
/**
 * Definition of the UserOofSettings type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the UserOofSettings type
 */
class UserOofSettings extends EWSType
{
    /**
     * OofState property
     *
     * @var EWSType_OofState
     */
    public $OofState;

    /**
     * ExternalAudience property
     *
     * @var EWSType_ExternalAudience
     */
    public $ExternalAudience;

    /**
     * Duration property
     *
     * @var EWSType_Duration
     */
    public $Duration;

    /**
     * InternalReply property
     *
     * @var EWSType_ReplyBody
     */
    public $InternalReply;

    /**
     * ExternalReply property
     *
     * @var EWSType_ReplyBody
     */
    public $ExternalReply;
}
