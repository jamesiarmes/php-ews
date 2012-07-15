<?php
/**
 * Definition of the ServerVersionInfo type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ServerVersionInfo type
 */
class EWSType_ServerVersionInfo extends EWSType
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'MajorVersion',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'MinorVersion',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'MajorBuildNumber',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'MinorBuildNumber',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'Version',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
