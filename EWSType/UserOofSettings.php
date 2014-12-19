<?php
/**
 * Contains EWSType_UserOofSettings.
 */

/**
 * Defines the Out of Office (OOF) settings.
 *
 * @package php-ews\Types
 */
class EWSType_UserOofSettings extends EWSType
{
    /**
     * Contains the duration for which the OOF status is enabled if the OofState
     * element is set to Scheduled.
     *
     * If the OofState element is set to Enabled or Disabled, the value of this
     * element is ignored.
     *
     * @since Exchange 2007
     *
     * @var EWSType_Duration
     */
    public $Duration;

    /**
     * Contains a value that determines to whom external OOF messages are sent.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExternalAudience
     */
    public $ExternalAudience;

    /**
     * Contains the OOF response sent to addresses outside the recipient's
     * domain or trusted domains.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ReplyBody
     */
    public $ExternalReply;

    /**
     * Contains the OOF response sent to other users in the user's domain or
     * trusted domain.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ReplyBody
     */
    public $InternalReply;

    /**
     * Contains the user's OOF state.
     *
     * @since Exchange 2007
     *
     * @var EWSType_OofState
     */
    public $OofState;
}
