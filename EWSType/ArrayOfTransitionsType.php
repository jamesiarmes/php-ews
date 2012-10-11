<?php
/**
 * The TransitionsGroups element represents an array of time zone transition
 * groups.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfTransitionsType type.
 */
class EWSType_ArrayOfTransitionsType extends EWSType
{
    /**
     * A string value that represents the unique identifier of the transitions
     * group.
     *
     * @var string
     */
    public $Id;

    /**
     * A time zone transition that occurs on a specific date and at a specific
     * time.
     *
     * @var EWSType_AbsoluteDateTransitionType
     */
    public $AbsoluteDateTransition;

    /**
     * A time zone transition that occurs on the same day each year.
     *
     * @var EWSType_RecurringDayTransitionType
     */
    public $RecurringDayTransition;

    /**
     * A time zone transition that occurs on a specified day of the year.
     *
     * @var EWSType_RecurringDateTransitionType
     */
    public $RecurringDateTransition;

    /**
     * A time zone transition.
     *
     * @var EWSType_TransitionType
     */
    public $Transition;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Id',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'AbsoluteDateTransition',
                'required' => false,
                'type' => 'AbsoluteDateTransitionType',
            ),
            array(
                'name' => 'RecurringDayTransition',
                'required' => false,
                'type' => 'RecurringDayTransitionType',
            ),
            array(
                'name' => 'RecurringDateTransition',
                'required' => false,
                'type' => 'RecurringDateTransitionType',
            ),
        );
    }
}
