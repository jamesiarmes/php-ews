<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing PhoneCallInformationType
 *
 *
 * XSD Type: PhoneCallInformationType
 *
 * @method PhoneCallInformationType getPhoneCallState()
 * @method PhoneCallInformationType setPhoneCallState(string $phoneCallState)
 * @method PhoneCallInformationType getConnectionFailureCause()
 * @method PhoneCallInformationType setConnectionFailureCause(string $connectionFailureCause)
 * @method PhoneCallInformationType getSIPResponseText()
 * @method PhoneCallInformationType setSIPResponseText(string $sIPResponseText)
 * @method PhoneCallInformationType getSIPResponseCode()
 * @method PhoneCallInformationType setSIPResponseCode(integer $sIPResponseCode)
 */
class PhoneCallInformationType extends Type
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
