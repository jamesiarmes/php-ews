<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ServerVersionInfo type
 */
class ServerVersionInfo extends DataType
{
    /**
     * MajorVersion property
     *
     * @var integer
     */
    public $MajorVersion;

    /**
     * MinorVersion property
     *
     * @var integer
     */
    public $MinorVersion;

    /**
     * MajorBuildNumber property
     *
     * @var integer
     */
    public $MajorBuildNumber;

    /**
     * MinorBuildNumber property
     *
     * @var integer
     */
    public $MinorBuildNumber;

    /**
     * Version property
     *
     * @var string
     */
    public $Version;
}
