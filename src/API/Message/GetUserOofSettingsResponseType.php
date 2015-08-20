<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserOofSettingsResponseType
 *
 *
 * XSD Type: GetUserOofSettingsResponse
 *
 * @method GetUserOofSettingsResponseType getResponseMessage()
 * @method GetUserOofSettingsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method GetUserOofSettingsResponseType getOofSettings()
 * @method GetUserOofSettingsResponseType setOofSettings(\jamesiarmes\PEWS\API\Type\OofSettings $oofSettings)
 * @method GetUserOofSettingsResponseType getAllowExternalOof()
 * @method GetUserOofSettingsResponseType setAllowExternalOof(string $allowExternalOof)
 */
class GetUserOofSettingsResponseType extends Message
{

    /**
     * @property \jamesiarmes\PEWS\API\Message\ResponseMessageType $responseMessage
     */
    protected $responseMessage = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\OofSettings $oofSettings
     */
    protected $oofSettings = null;

    /**
     * @property string $allowExternalOof
     */
    protected $allowExternalOof = null;


}

