<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing PhoneCallInformationType
 *
 *
 * XSD Type: PhoneCallInformationType
 *
 * @method PhoneCallInformationType getPhoneCallState()
 * @method PhoneCallInformationType setPhoneCallState($phoneCallState)
 * @method PhoneCallInformationType getConnectionFailureCause()
 * @method PhoneCallInformationType
 * setConnectionFailureCause($connectionFailureCause)
 * @method PhoneCallInformationType getSIPResponseText()
 * @method PhoneCallInformationType setSIPResponseText($sIPResponseText)
 * @method PhoneCallInformationType getSIPResponseCode()
 * @method PhoneCallInformationType setSIPResponseCode($sIPResponseCode)
 */
class PhoneCallInformationType extends TypeTest
{

    /**
     * @property string $phoneCallState
     */
    protected $phoneCallState = null;

    /**
     * @property string $connectionFailureCause
     */
    protected $connectionFailureCause = null;

    /**
     * @property string $sIPResponseText
     */
    protected $sIPResponseText = null;

    /**
     * @property integer $sIPResponseCode
     */
    protected $sIPResponseCode = null;


}

