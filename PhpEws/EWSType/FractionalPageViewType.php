<?php
/**
 * Definition of the FractionalPageViewType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FractionalPageViewType type
 */
class FractionalPageViewType extends PhpEws\EWSType
{
    /**
     * Numerator property
     *
     * @var integer
     */
    public $Numerator;

    /**
     * Denominator property
     *
     * @var integer
     */
    public $Denominator;
}
