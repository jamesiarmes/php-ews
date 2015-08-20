<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing OccurrenceInfoType
 *
 *
 * XSD Type: OccurrenceInfoType
 *
 * @method OccurrenceInfoType getItemId()
 * @method OccurrenceInfoType setItemId(ItemIdType $itemId)
 * @method OccurrenceInfoType getStart()
 * @method OccurrenceInfoType setStart(\DateTime $start)
 * @method OccurrenceInfoType getEnd()
 * @method OccurrenceInfoType setEnd(\DateTime $end)
 * @method OccurrenceInfoType getOriginalStart()
 * @method OccurrenceInfoType setOriginalStart(\DateTime $originalStart)
 */
class OccurrenceInfoType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property \DateTime $start
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
        'end' => 'dateTime',
        'originalStart' => 'dateTime',
    );

    /**
     * @property \DateTime $end
     */
    protected $end = null;

    /**
     * @property \DateTime $originalStart
     */
    protected $originalStart = null;
}
