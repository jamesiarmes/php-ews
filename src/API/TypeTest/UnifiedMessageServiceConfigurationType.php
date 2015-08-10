<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing UnifiedMessageServiceConfigurationType
 *
 *
 * XSD Type: UnifiedMessageServiceConfiguration
 *
 * @method UnifiedMessageServiceConfigurationType getUmEnabled()
 * @method UnifiedMessageServiceConfigurationType setUmEnabled($umEnabled)
 * @method UnifiedMessageServiceConfigurationType getPlayOnPhoneDialString()
 * @method UnifiedMessageServiceConfigurationType
 * setPlayOnPhoneDialString($playOnPhoneDialString)
 * @method UnifiedMessageServiceConfigurationType getPlayOnPhoneEnabled()
 * @method UnifiedMessageServiceConfigurationType
 * setPlayOnPhoneEnabled($playOnPhoneEnabled)
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

