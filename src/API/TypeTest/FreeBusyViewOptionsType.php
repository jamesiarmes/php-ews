<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing FreeBusyViewOptionsType
 *
 *
 * XSD Type: FreeBusyViewOptionsType
 *
 * @method FreeBusyViewOptionsType getTimeWindow()
 * @method FreeBusyViewOptionsType setTimeWindow(DurationType $timeWindow)
 * @method FreeBusyViewOptionsType getMergedFreeBusyIntervalInMinutes()
 * @method FreeBusyViewOptionsType setMergedFreeBusyIntervalInMinutes(integer $mergedFreeBusyIntervalInMinutes)
 * @method FreeBusyViewOptionsType getRequestedView()
 * @method FreeBusyViewOptionsType setRequestedView(array $requestedView)
 */
class FreeBusyViewOptionsType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DurationType $timeWindow
     */
    protected $timeWindow = null;

    /**
     * @property integer $mergedFreeBusyIntervalInMinutes
     */
    protected $mergedFreeBusyIntervalInMinutes = null;

    /**
     * @property string[] $requestedView
     */
    protected $requestedView = null;


}

