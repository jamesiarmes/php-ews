<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AbsoluteDateTransitionType
 *
 *
 * XSD Type: AbsoluteDateTransitionType
 *
 * @method \DateTime getDateTime()
 * @method AbsoluteDateTransitionType setDateTime(\DateTime $dateTime)
 */
class AbsoluteDateTransitionType extends TransitionType
{

    /**
     * @var \DateTime
     */
    protected $dateTime = null;

    protected $_typeMap = array(
        'dateTime' => 'dateTime',
    );
}
