<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing UserOofSettingsType
 *
 *
 * XSD Type: UserOofSettings
 *
 * @method UserOofSettingsType getOofState()
 * @method UserOofSettingsType setOofState($oofState)
 * @method UserOofSettingsType getExternalAudience()
 * @method UserOofSettingsType setExternalAudience($externalAudience)
 * @method UserOofSettingsType getDuration()
 * @method UserOofSettingsType setDuration($duration)
 * @method UserOofSettingsType getInternalReply()
 * @method UserOofSettingsType setInternalReply($internalReply)
 * @method UserOofSettingsType getExternalReply()
 * @method UserOofSettingsType setExternalReply($externalReply)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\DurationType $duration
     */
    protected $duration = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ReplyBodyType $internalReply
     */
    protected $internalReply = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ReplyBodyType $externalReply
     */
    protected $externalReply = null;


}

