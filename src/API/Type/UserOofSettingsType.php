<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserOofSettingsType
 *
 *
 * XSD Type: UserOofSettings
 *
 * @method UserOofSettingsType getOofState()
 * @method UserOofSettingsType setOofState(string $oofState)
 * @method UserOofSettingsType getExternalAudience()
 * @method UserOofSettingsType setExternalAudience(string $externalAudience)
 * @method UserOofSettingsType getDuration()
 * @method UserOofSettingsType setDuration(DurationType $duration)
 * @method UserOofSettingsType getInternalReply()
 * @method UserOofSettingsType setInternalReply(ReplyBodyType $internalReply)
 * @method UserOofSettingsType getExternalReply()
 * @method UserOofSettingsType setExternalReply(ReplyBodyType $externalReply)
 */
class UserOofSettingsType extends Type
{

    /**
     * @property string $oofState
     */
    protected $oofState = null;

    /**
     * @property string $externalAudience
     */
    protected $externalAudience = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DurationType $duration
     */
    protected $duration = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ReplyBodyType $internalReply
     */
    protected $internalReply = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ReplyBodyType $externalReply
     */
    protected $externalReply = null;


}

