<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ServerVersionInfo
 *
 * @method integer getMajorVersion()
 * @method ServerVersionInfo setMajorVersion(integer $majorVersion)
 * @method integer getMinorVersion()
 * @method ServerVersionInfo setMinorVersion(integer $minorVersion)
 * @method integer getMajorBuildNumber()
 * @method ServerVersionInfo setMajorBuildNumber(integer $majorBuildNumber)
 * @method integer getMinorBuildNumber()
 * @method ServerVersionInfo setMinorBuildNumber(integer $minorBuildNumber)
 * @method string getVersion()
 * @method ServerVersionInfo setVersion(string $version)
 */
class ServerVersionInfo extends Type
{

    /**
     * @var integer
     */
    protected $majorVersion = null;

    /**
     * @var integer
     */
    protected $minorVersion = null;

    /**
     * @var integer
     */
    protected $majorBuildNumber = null;

    /**
     * @var integer
     */
    protected $minorBuildNumber = null;

    /**
     * @var string
     */
    protected $version = null;
}
