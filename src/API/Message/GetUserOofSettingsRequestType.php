<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserOofSettingsRequestType
 *
 *
 * XSD Type: GetUserOofSettingsRequest
 *
 * @method \jamesiarmes\PEWS\API\Type\Mailbox getMailbox()
 * @method GetUserOofSettingsRequestType setMailbox(\jamesiarmes\PEWS\API\Type\Mailbox $mailbox)
 */
class GetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\Mailbox
     */
    protected $mailbox = null;
}
