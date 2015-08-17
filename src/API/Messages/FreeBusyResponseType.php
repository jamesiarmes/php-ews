<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FreeBusyResponseType
 *
 *
 * XSD Type: FreeBusyResponseType
 *
 * @method FreeBusyResponseType getResponseMessage()
 * @method FreeBusyResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method FreeBusyResponseType getFreeBusyView()
 * @method FreeBusyResponseType setFreeBusyView(\jamesiarmes\PEWS\API\TypeTest\FreeBusyViewType $freeBusyView)
 */
class FreeBusyResponseType extends Messages
{

    /**
     * @property \jamesiarmes\PEWS\API\Messages\ResponseMessageType $responseMessage
     */
    protected $responseMessage = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FreeBusyViewType $freeBusyView
     */
    protected $freeBusyView = null;


}

