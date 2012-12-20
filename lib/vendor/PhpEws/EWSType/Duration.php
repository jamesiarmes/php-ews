<?php
/**
 * Definition of the Duration type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the Duration type
 */
class Duration extends EWSType
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
