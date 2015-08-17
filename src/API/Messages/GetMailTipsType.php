<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetMailTipsType
 *
 *
 * XSD Type: GetMailTipsType
 *
 * @method GetMailTipsType getSendingAs()
 * @method GetMailTipsType setSendingAs(\jamesiarmes\PEWS\API\TypeTest\EmailAddressType $sendingAs)
 * @method GetMailTipsType getRecipients()
 * @method GetMailTipsType setRecipients(array $recipients)
 * @method GetMailTipsType getMailTipsRequested()
 * @method GetMailTipsType setMailTipsRequested(array $mailTipsRequested)
 */
class GetMailTipsType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $sendingAs
     */
    protected $sendingAs = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType[] $recipients
     */
    protected $recipients = null;

    /**
     * @property string[] $mailTipsRequested
     */
    protected $mailTipsRequested = null;


}

