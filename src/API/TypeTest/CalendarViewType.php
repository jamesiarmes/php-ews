<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing CalendarViewType
 *
 *
 * XSD Type: CalendarViewType
 *
 * @method CalendarViewType getStartDate()
 * @method CalendarViewType setStartDate($startDate)
 * @method CalendarViewType getEndDate()
 * @method CalendarViewType setEndDate($endDate)
 */
class CalendarViewType extends BasePagingType
{

    /**
     * @property \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @property \DateTime $endDate
     */
    protected $endDate = null;


}

