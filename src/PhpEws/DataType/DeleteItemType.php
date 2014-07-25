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
     * @var EWSType_NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * DeleteType property
     *
     * @var EWSType_DisposalType
     */
    public $DeleteType;

    /**
     * SendMeetingCancellations property
     *
     * @var EWSType_CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingCancellations;

    /**
     * AffectedTaskOccurrences property
     *
     * @var EWSType_AffectedTaskOccurrencesType
     */
    public $AffectedTaskOccurrences;
}
