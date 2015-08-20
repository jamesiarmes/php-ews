<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetUserOofSettingsResponseType
 *
 *
 * XSD Type: GetUserOofSettingsResponse
 *
 * @method ResponseMessageType getResponseMessage()
 * @method GetUserOofSettingsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method \jamesiarmes\PEWS\API\Type\OofSettings getOofSettings()
 * @method GetUserOofSettingsResponseType setOofSettings(\jamesiarmes\PEWS\API\Type\OofSettings $oofSettings)
 * @method string getAllowExternalOof()
 * @method GetUserOofSettingsResponseType setAllowExternalOof(string $allowExternalOof)
 */
class GetUserOofSettingsResponseType extends Message
{

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\OofSettings
     */
    protected $oofSettings = null;

    /**
     * @var string
     */
    protected $allowExternalOof = null;
}
