<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AbsoluteDateTransitionType
 *
 *
 * XSD Type: AbsoluteDateTransitionType
 *
 * @method AbsoluteDateTransitionType getDateTime()
 * @method AbsoluteDateTransitionType setDateTime(\DateTime $dateTime)
 */
class AbsoluteDateTransitionType extends TransitionType
{

    /**
     * @property \DateTime $dateTime
     */
    protected $dateTime = null;

    protected $_typeMap = array(
        'dateTime' => 'dateTime',
    );


}

