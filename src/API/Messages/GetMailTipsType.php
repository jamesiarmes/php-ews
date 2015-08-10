<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetMailTipsType
 *
 *
 * XSD Type: GetMailTipsType
 *
 * @method GetMailTipsType getSendingAs()
 * @method GetMailTipsType setSendingAs($sendingAs)
 * @method GetMailTipsType getRecipients()
 * @method GetMailTipsType setRecipients($recipients)
 * @method GetMailTipsType getMailTipsRequested()
 * @method GetMailTipsType setMailTipsRequested($mailTipsRequested)
 */
class GetMailTipsType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $sendingAs
     */
    protected $sendingAs = null;

    /**
     * @property array $recipients
     */
    protected $recipients = null;

    /**
     * @property array $mailTipsRequested
     */
    protected $mailTipsRequested = null;


}

