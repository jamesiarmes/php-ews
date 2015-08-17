<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class OccurrenceInfoType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $itemId
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

