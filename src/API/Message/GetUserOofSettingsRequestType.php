<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserOofSettingsRequestType
 *
 *
 * XSD Type: GetUserOofSettingsRequest
 *
 * @method \jamesiarmes\PEWS\API\Type\EmailAddressType getMailbox()
 * @method GetUserOofSettingsRequestType setMailbox(\jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox)
 */
class GetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
