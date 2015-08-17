<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing SetUserOofSettingsRequestType
 *
 *
 * XSD Type: SetUserOofSettingsRequest
 *
 * @method SetUserOofSettingsRequestType getMailbox()
 * @method SetUserOofSettingsRequestType setMailbox(\jamesiarmes\PEWS\API\TypeTest\Mailbox $mailbox)
 * @method SetUserOofSettingsRequestType getUserOofSettings()
 * @method SetUserOofSettingsRequestType setUserOofSettings(\jamesiarmes\PEWS\API\TypeTest\UserOofSettings $userOofSettings)
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

