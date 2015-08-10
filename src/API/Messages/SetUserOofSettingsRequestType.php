<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SetUserOofSettingsRequestType
 *
 *
 * XSD Type: SetUserOofSettingsRequest
 *
 * @method SetUserOofSettingsRequestType getMailbox()
 * @method SetUserOofSettingsRequestType setMailbox($mailbox)
 * @method SetUserOofSettingsRequestType getUserOofSettings()
 * @method SetUserOofSettingsRequestType setUserOofSettings($userOofSettings)
 */
class SetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\Mailbox $mailbox
     */
    protected $mailbox = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UserOofSettings $userOofSettings
     */
    protected $userOofSettings = null;


}

