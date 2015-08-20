<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ServerVersionInfo
 *
 * @method ServerVersionInfo getMajorVersion()
 * @method ServerVersionInfo setMajorVersion(integer $majorVersion)
 * @method ServerVersionInfo getMinorVersion()
 * @method ServerVersionInfo setMinorVersion(integer $minorVersion)
 * @method ServerVersionInfo getMajorBuildNumber()
 * @method ServerVersionInfo setMajorBuildNumber(integer $majorBuildNumber)
 * @method ServerVersionInfo getMinorBuildNumber()
 * @method ServerVersionInfo setMinorBuildNumber(integer $minorBuildNumber)
 * @method ServerVersionInfo getVersion()
 * @method ServerVersionInfo setVersion(string $version)
 */
class ServerVersionInfo extends Type
{

    /**
     * @property integer $majorVersion
     */
    protected $majorVersion = null;

    /**
     * @property integer $minorVersion
     */
    protected $minorVersion = null;

    /**
     * @property integer $majorBuildNumber
     */
    protected $majorBuildNumber = null;

    /**
     * @property integer $minorBuildNumber
     */
    protected $minorBuildNumber = null;

    /**
     * @property string $version
     */
    protected $version = null;
}
