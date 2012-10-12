<?php
/**
 * Definition of the Duration type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the Duration type
 */
class EWSType_Duration extends EWSType
{
    /**
     * StartTime property
     *
     * @var EWSType_dateTime
     */
    public $StartTime;

    /**
     * EndTime property
     *
     * @var EWSType_dateTime
     */
    public $EndTime;
}
