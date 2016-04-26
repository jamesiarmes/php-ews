<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing CalendarViewType
 *
 *
 * XSD Type: CalendarViewType
 *
 * @method \DateTime getStartDate()
 * @method CalendarViewType setStartDate(\DateTime $startDate)
 * @method \DateTime getEndDate()
 * @method CalendarViewType setEndDate(\DateTime $endDate)
 */
class CalendarViewType extends BasePagingType
{

    /**
     * @var \DateTime
     */
    protected $startDate = null;

    protected $_typeMap = array(
        'startDate' => 'dateTime',
        'endDate' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $endDate = null;
}
