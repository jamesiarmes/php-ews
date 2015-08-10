<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing FractionalPageViewType
 *
 *
 * XSD Type: FractionalPageViewType
 *
 * @method FractionalPageViewType getNumerator()
 * @method FractionalPageViewType setNumerator($numerator)
 * @method FractionalPageViewType getDenominator()
 * @method FractionalPageViewType setDenominator($denominator)
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

