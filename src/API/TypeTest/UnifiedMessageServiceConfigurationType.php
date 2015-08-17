<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing UnifiedMessageServiceConfigurationType
 *
 *
 * XSD Type: UnifiedMessageServiceConfiguration
 *
 * @method UnifiedMessageServiceConfigurationType getUmEnabled()
 * @method UnifiedMessageServiceConfigurationType setUmEnabled(boolean $umEnabled)
 * @method UnifiedMessageServiceConfigurationType getPlayOnPhoneDialString()
 * @method UnifiedMessageServiceConfigurationType setPlayOnPhoneDialString(string $playOnPhoneDialString)
 * @method UnifiedMessageServiceConfigurationType getPlayOnPhoneEnabled()
 * @method UnifiedMessageServiceConfigurationType setPlayOnPhoneEnabled(boolean $playOnPhoneEnabled)
 */
class UnifiedMessageServiceConfigurationType extends ServiceConfigurationType
{

    /**
     * @property boolean $umEnabled
     */
    protected $umEnabled = null;

    /**
     * @property string $playOnPhoneDialString
     */
    protected $playOnPhoneDialString = null;

    /**
     * @property boolean $playOnPhoneEnabled
     */
    protected $playOnPhoneEnabled = null;


}

