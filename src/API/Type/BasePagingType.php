<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing BasePagingType
 *
 *
 * XSD Type: BasePagingType
 *
 * @method integer getMaxEntriesReturned()
 * @method BasePagingType setMaxEntriesReturned(integer $maxEntriesReturned)
 */
class BasePagingType extends Type
{

    /**
     * @var integer
     */
    protected $maxEntriesReturned = null;
}
