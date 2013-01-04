<?php
/**
 * Definition of the DeleteItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DeleteItemType type
 */
class DeleteItemType extends EWSType
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
