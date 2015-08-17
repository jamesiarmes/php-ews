<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing CalendarViewType
 *
 *
 * XSD Type: CalendarViewType
 *
 * @method CalendarViewType getStartDate()
 * @method CalendarViewType setStartDate(\DateTime $startDate)
 * @method CalendarViewType getEndDate()
 * @method CalendarViewType setEndDate(\DateTime $endDate)
 */
class CalendarViewType extends BasePagingType
{

    /**
     * @property \DateTime $startDate
     */
    protected $startDate = null;

    protected $_typeMap = array(
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
    );

    /**
     * @property \DateTime $endDate
     */
    protected $endDate = null;


}

