<?php
/**
 * Definition of the DeleteItemType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the DeleteItemType type
 */
class DeleteItemType extends PhpEws\EWSType
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
