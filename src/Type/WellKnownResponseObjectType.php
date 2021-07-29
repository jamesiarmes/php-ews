<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\WellKnownResponseObjectType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Base class fot meeting request replies.
 *
 * @package php-ews\Type
 */
abstract class WellKnownResponseObjectType extends ResponseObjectType
{
	/**
     * Represents the proposed end time of a meeting.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ProposedEnd;
	
	/**
     * Represents the proposed start time of a meeting.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ProposedStart;

}
