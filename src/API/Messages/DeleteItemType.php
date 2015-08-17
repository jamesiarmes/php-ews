<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing DeleteItemType
 *
 *
 * XSD Type: DeleteItemType
 *
 * @method DeleteItemType getDeleteType()
 * @method DeleteItemType setDeleteType(string $deleteType)
 * @method DeleteItemType getSendMeetingCancellations()
 * @method DeleteItemType setSendMeetingCancellations(string $sendMeetingCancellations)
 * @method DeleteItemType getAffectedTaskOccurrences()
 * @method DeleteItemType setAffectedTaskOccurrences(string $affectedTaskOccurrences)
 * @method DeleteItemType getItemIds()
 * @method DeleteItemType setItemIds(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseItemIdsType $itemIds)
 */
class DeleteItemType extends BaseRequestType
{

    /**
     * @property string $deleteType
     */
    protected $deleteType = null;

    /**
     * @property string $sendMeetingCancellations
     */
    protected $sendMeetingCancellations = null;

    /**
     * @property string $affectedTaskOccurrences
     */
    protected $affectedTaskOccurrences = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseItemIdsType $itemIds
     */
    protected $itemIds = null;


}

