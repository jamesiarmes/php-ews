<?php
/**
 * Definition of the FractionalPageViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FractionalPageViewType type
 */
class FractionalPageViewType extends EWSType
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
