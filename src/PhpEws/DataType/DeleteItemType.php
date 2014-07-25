<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the DeleteItemType type
 */
class DeleteItemType extends DataType
{
    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * DeleteType property
     *
     * @var DisposalType
     */
    public $DeleteType;

    /**
     * SendMeetingCancellations property
     *
     * @var CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingCancellations;

    /**
     * AffectedTaskOccurrences property
     *
     * @var AffectedTaskOccurrencesType
     */
    public $AffectedTaskOccurrences;
}
