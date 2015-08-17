<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ServerVersionInfo
 *
 * @method ServerVersionInfo getMajorVersion()
 * @method ServerVersionInfo setMajorVersion($majorVersion)
 * @method ServerVersionInfo getMinorVersion()
 * @method ServerVersionInfo setMinorVersion($minorVersion)
 * @method ServerVersionInfo getMajorBuildNumber()
 * @method ServerVersionInfo setMajorBuildNumber($majorBuildNumber)
 * @method ServerVersionInfo getMinorBuildNumber()
 * @method ServerVersionInfo setMinorBuildNumber($minorBuildNumber)
 * @method ServerVersionInfo getVersion()
 * @method ServerVersionInfo setVersion($version)
 */
class ServerVersionInfo extends TypeTest
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

