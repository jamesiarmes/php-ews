<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing PeriodType
 *
 *
 * XSD Type: PeriodType
 *
 * @method PeriodType getBias()
 * @method PeriodType setBias(\DateInterval $bias)
 * @method PeriodType getName()
 * @method PeriodType setName(string $name)
 * @method PeriodType getId()
 * @method PeriodType setId(string $id)
 */
class PeriodType extends Type
{

    /**
     * @property \DateInterval $bias
     */
    protected $bias = null;

    /**
     * @property string $name
     */
    protected $name = null;

    /**
     * @property string $id
     */
    protected $id = null;


}

