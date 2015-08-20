<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SetUserOofSettingsRequestType
 *
 *
 * XSD Type: SetUserOofSettingsRequest
 *
 * @method SetUserOofSettingsRequestType getMailbox()
 * @method SetUserOofSettingsRequestType setMailbox(\jamesiarmes\PEWS\API\Type\Mailbox $mailbox)
 * @method SetUserOofSettingsRequestType getUserOofSettings()
 * @method SetUserOofSettingsRequestType setUserOofSettings(\jamesiarmes\PEWS\API\Type\UserOofSettings $userOofSettings)
 */
class SetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\Mailbox $mailbox
     */
    protected $mailbox = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserOofSettings $userOofSettings
     */
    protected $userOofSettings = null;


}

