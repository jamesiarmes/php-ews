<?php
/**
 * Contains \jamesiarmes\PEWS\Type\TransitionTargetType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Specifies the target of the time zone transition.
 *
 * The target is either a time zone period or a group of time zone transitions.
 *
 * @package php-ews\Types
 */
class TransitionTargetType extends String
{
    /**
     * Indicates whether the time zone transition target is a time zone period
     * or of a group of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Enumeration\TransitionTargetKindType
     */
    public $Kind;
}
