<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing FractionalPageViewType
 *
 *
 * XSD Type: FractionalPageViewType
 *
 * @method integer getNumerator()
 * @method FractionalPageViewType setNumerator(integer $numerator)
 * @method integer getDenominator()
 * @method FractionalPageViewType setDenominator(integer $denominator)
 */
class FractionalPageViewType extends BasePagingType
{

    /**
     * @var integer
     */
    protected $numerator = null;

    /**
     * @var integer
     */
    protected $denominator = null;
}
