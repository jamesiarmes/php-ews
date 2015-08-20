<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing FractionalPageViewType
 *
 *
 * XSD Type: FractionalPageViewType
 *
 * @method FractionalPageViewType getNumerator()
 * @method FractionalPageViewType setNumerator(integer $numerator)
 * @method FractionalPageViewType getDenominator()
 * @method FractionalPageViewType setDenominator(integer $denominator)
 */
class FractionalPageViewType extends BasePagingType
{

    /**
     * @property integer $numerator
     */
    protected $numerator = null;

    /**
     * @property integer $denominator
     */
    protected $denominator = null;


}

