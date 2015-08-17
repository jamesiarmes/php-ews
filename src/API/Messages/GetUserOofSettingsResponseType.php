<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetUserOofSettingsResponseType
 *
 *
 * XSD Type: GetUserOofSettingsResponse
 *
 * @method GetUserOofSettingsResponseType getResponseMessage()
 * @method GetUserOofSettingsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method GetUserOofSettingsResponseType getOofSettings()
 * @method GetUserOofSettingsResponseType setOofSettings(\jamesiarmes\PEWS\API\TypeTest\OofSettings $oofSettings)
 * @method GetUserOofSettingsResponseType getAllowExternalOof()
 * @method GetUserOofSettingsResponseType setAllowExternalOof(string $allowExternalOof)
 */
class GetUserOofSettingsResponseType extends Messages
{

    /**
     * @property \jamesiarmes\PEWS\API\Messages\ResponseMessageType $responseMessage
     */
    protected $responseMessage = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\OofSettings $oofSettings
     */
    protected $oofSettings = null;

    /**
     * @property string $allowExternalOof
     */
    protected $allowExternalOof = null;


}

