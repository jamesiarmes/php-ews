<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetMailTipsType
 *
 *
 * XSD Type: GetMailTipsType
 *
 * @method \jamesiarmes\PEWS\API\Type\EmailAddressType getSendingAs()
 * @method GetMailTipsType setSendingAs(\jamesiarmes\PEWS\API\Type\EmailAddressType $sendingAs)
 * @method array getRecipients()
 * @method GetMailTipsType setRecipients(array $recipients)
 * @method array getMailTipsRequested()
 * @method GetMailTipsType setMailTipsRequested(array $mailTipsRequested)
 */
class GetMailTipsType extends BaseRequestType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $sendingAs = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $recipients = null;

    /**
     * @var string[]
     */
    protected $mailTipsRequested = null;
}
