<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing GetUserOofSettingsResponseType
 *
 *
 * XSD Type: GetUserOofSettingsResponse
 *
 * @method GetUserOofSettingsResponseType getResponseMessage()
 * @method GetUserOofSettingsResponseType setResponseMessage($responseMessage)
 * @method GetUserOofSettingsResponseType getOofSettings()
 * @method GetUserOofSettingsResponseType setOofSettings($oofSettings)
 * @method GetUserOofSettingsResponseType getAllowExternalOof()
 * @method GetUserOofSettingsResponseType setAllowExternalOof($allowExternalOof)
 */
class GetUserOofSettingsResponseType extends Type
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

