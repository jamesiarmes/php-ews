<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing OccurrenceItemIdType
 *
 *
 * XSD Type: OccurrenceItemIdType
 *
 * @method OccurrenceItemIdType getRecurringMasterId()
 * @method OccurrenceItemIdType setRecurringMasterId(string $recurringMasterId)
 * @method OccurrenceItemIdType getChangeKey()
 * @method OccurrenceItemIdType setChangeKey(string $changeKey)
 * @method OccurrenceItemIdType getInstanceIndex()
 * @method OccurrenceItemIdType setInstanceIndex(integer $instanceIndex)
 */
class OccurrenceItemIdType extends BaseItemIdType
{

    /**
     * @property string $recurringMasterId
     */
    protected $recurringMasterId = null;

    /**
     * @property string $changeKey
     */
    protected $changeKey = null;

    /**
     * @property integer $instanceIndex
     */
    protected $instanceIndex = null;


}

