<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing OccurrenceItemIdType
 *
 *
 * XSD Type: OccurrenceItemIdType
 *
 * @method string getRecurringMasterId()
 * @method OccurrenceItemIdType setRecurringMasterId(string $recurringMasterId)
 * @method string getChangeKey()
 * @method OccurrenceItemIdType setChangeKey(string $changeKey)
 * @method integer getInstanceIndex()
 * @method OccurrenceItemIdType setInstanceIndex(integer $instanceIndex)
 */
class OccurrenceItemIdType extends BaseItemIdType
{

    /**
     * @var string
     */
    protected $recurringMasterId = null;

    /**
     * @var string
     */
    protected $changeKey = null;

    /**
     * @var integer
     */
    protected $instanceIndex = null;
}
