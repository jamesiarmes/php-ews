<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetMailTipsType
 *
 *
 * XSD Type: GetMailTipsType
 *
 * @method GetMailTipsType getSendingAs()
 * @method GetMailTipsType setSendingAs(\jamesiarmes\PEWS\API\Type\EmailAddressType $sendingAs)
 * @method GetMailTipsType getRecipients()
 * @method GetMailTipsType setRecipients(array $recipients)
 * @method GetMailTipsType getMailTipsRequested()
 * @method GetMailTipsType setMailTipsRequested(array $mailTipsRequested)
 */
class GetMailTipsType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $sendingAs
     */
    protected $sendingAs = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType[] $recipients
     */
    protected $recipients = null;

    /**
     * @property string[] $mailTipsRequested
     */
    protected $mailTipsRequested = null;
}
