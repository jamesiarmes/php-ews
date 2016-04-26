<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing FreeBusyResponseType
 *
 *
 * XSD Type: FreeBusyResponseType
 *
 * @method ResponseMessageType getResponseMessage()
 * @method FreeBusyResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method \jamesiarmes\PEWS\API\Type\FreeBusyViewType getFreeBusyView()
 * @method FreeBusyResponseType setFreeBusyView(\jamesiarmes\PEWS\API\Type\FreeBusyViewType $freeBusyView)
 */
class FreeBusyResponseType extends Message
{

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FreeBusyViewType
     */
    protected $freeBusyView = null;
}
