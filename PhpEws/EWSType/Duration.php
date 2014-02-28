<?php
/**
 * Definition of the Duration type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the Duration type
 */
class Duration extends PhpEws\EWSType
{
    /**
     * StartTime property
     *
     * @var dateTime
     */
    public $StartTime;

    /**
     * EndTime property
     *
     * @var dateTime
     */
    public $EndTime;
}
