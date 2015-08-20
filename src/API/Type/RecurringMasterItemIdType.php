<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing RecurringMasterItemIdType
 *
 *
 * XSD Type: RecurringMasterItemIdType
 *
 * @method string getOccurrenceId()
 * @method RecurringMasterItemIdType setOccurrenceId(string $occurrenceId)
 * @method string getChangeKey()
 * @method RecurringMasterItemIdType setChangeKey(string $changeKey)
 */
class RecurringMasterItemIdType extends BaseItemIdType
{

    /**
     * @var string
     */
    protected $occurrenceId = null;

    /**
     * @var string
     */
    protected $changeKey = null;
}
