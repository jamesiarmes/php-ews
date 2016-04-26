<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing DistinguishedGroupByType
 *
 * Allows consumers to access standard groupings for FindItem queries. This is in
 *  contrast to the arbitrary (custom) groupings available via the t:GroupByType
 * XSD Type: DistinguishedGroupByType
 *
 * @method string getStandardGroupBy()
 * @method DistinguishedGroupByType setStandardGroupBy(string $standardGroupBy)
 */
class DistinguishedGroupByType extends BaseGroupByType
{

    /**
     * @var string
     */
    protected $standardGroupBy = null;
}
