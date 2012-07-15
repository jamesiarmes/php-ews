<?php
/**
 * Definition of the TimeZoneType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the TimeZoneType type
 */
class EWSType_TimeZoneType extends EWSType
{
    /**
     * BaseOffset property
     *
     * @var EWSType_duration
     */
    public $BaseOffset;

    /**
     * Standard property
     *
     * @var EWSType_TimeChangeType
     */
    public $Standard;

    /**
     * Daylight property
     *
     * @var EWSType_TimeChangeType
     */
    public $Daylight;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'BaseOffset',
                'required' => false,
                'type' => 'duration',
            ),
            array(
                'name' => 'Standard',
                'required' => false,
                'type' => 'TimeChangeType',
            ),
            array(
                'name' => 'Daylight',
                'required' => false,
                'type' => 'TimeChangeType',
            ),
            array(
                'name' => 'TimeZoneName',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
