<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TransitionType
 *
 *
 * XSD Type: TransitionType
 *
 * @method TransitionTargetType getTo()
 * @method TransitionType setTo(TransitionTargetType $to)
 */
class TransitionType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\TransitionTargetType
     */
    protected $to = null;
}
