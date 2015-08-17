<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing AttendeeType
 *
 *
 * XSD Type: AttendeeType
 *
 * @method AttendeeType getMailbox()
 * @method AttendeeType setMailbox($mailbox)
 * @method AttendeeType getResponseType()
 * @method AttendeeType setResponseType($responseType)
 * @method AttendeeType getLastResponseTime()
 * @method AttendeeType setLastResponseTime($lastResponseTime)
 */
class AttendeeType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $mailbox
     */
    protected $mailbox = null;

    /**
     * @property string $responseType
     */
    protected $responseType = null;

    /**
     * @property \DateTime $lastResponseTime
     */
    protected $lastResponseTime = null;

    protected $_typeMap = array(
        'lastResponseTime' => 'dateTime',
    );


}

