<?php
/**
 * Specifies the target of a time zone transition. The target is either a time
 * zone period or a group of time zone transitions.
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the TransitionTargetType type.
 */
class TransitionTargetType extends PhpEws\EWSType
{
    /**
     * Indicates whether the time zone transition target is a time zone period
     * or of a group of time zone transitions.
     *
     * @var KindType
     */
    public $Kind;

    /**
     * The text value of the element that specifies the unique identifier of the
     * Period or TransitionsGroup that is the target of the time zone
     * transition.
     *
     * @var string
     */
    public $_;
}
