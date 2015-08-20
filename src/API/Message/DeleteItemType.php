<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DeleteItemType
 *
 *
 * XSD Type: DeleteItemType
 *
 * @method string getDeleteType()
 * @method DeleteItemType setDeleteType(string $deleteType)
 * @method string getSendMeetingCancellations()
 * @method DeleteItemType setSendMeetingCancellations(string $sendMeetingCancellations)
 * @method string getAffectedTaskOccurrences()
 * @method DeleteItemType setAffectedTaskOccurrences(string $affectedTaskOccurrences)
 * @method \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method DeleteItemType setItemIds(\jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 */
class DeleteItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @var string
     */
    protected $sendMeetingCancellations = null;

    /**
     * @var string
     */
    protected $affectedTaskOccurrences = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;
}
