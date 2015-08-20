<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing FreeBusyResponseType
 *
 *
 * XSD Type: FreeBusyResponseType
 *
 * @method FreeBusyResponseType getResponseMessage()
 * @method FreeBusyResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method FreeBusyResponseType getFreeBusyView()
 * @method FreeBusyResponseType setFreeBusyView(\jamesiarmes\PEWS\API\Type\FreeBusyViewType $freeBusyView)
 */
class FreeBusyResponseType extends Message
{

    /**
     * @property \jamesiarmes\PEWS\API\Message\ResponseMessageType $responseMessage
     */
    protected $responseMessage = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FreeBusyViewType $freeBusyView
     */
    protected $freeBusyView = null;
}
