<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing SetUserOofSettingsRequestType
 *
 *
 * XSD Type: SetUserOofSettingsRequest
 *
 * @method \jamesiarmes\PEWS\API\Type\EmailAddressType getMailbox()
 * @method SetUserOofSettingsRequestType setMailbox(\jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox)
 * @method \jamesiarmes\PEWS\API\Type\UserOofSettings getUserOofSettings()
 * @method SetUserOofSettingsRequestType setUserOofSettings(\jamesiarmes\PEWS\API\Type\UserOofSettings $userOofSettings)
 */
class SetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\UserOofSettings
     */
    protected $userOofSettings = null;
}
