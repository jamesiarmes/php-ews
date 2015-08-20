<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing PeriodType
 *
 *
 * XSD Type: PeriodType
 *
 * @method \DateInterval getBias()
 * @method PeriodType setBias(\DateInterval $bias)
 * @method string getName()
 * @method PeriodType setName(string $name)
 * @method string getId()
 * @method PeriodType setId(string $id)
 */
class PeriodType extends Type
{

    /**
     * @var \DateInterval
     */
    protected $bias = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $id = null;
}
