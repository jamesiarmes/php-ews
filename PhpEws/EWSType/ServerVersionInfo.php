<?php
/**
 * Definition of the ServerVersionInfo type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ServerVersionInfo type
 */
class ServerVersionInfo extends PhpEws\EWSType
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
