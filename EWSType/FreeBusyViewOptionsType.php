<?php
/**
 * Definition of the FreeBusyViewOptionsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FreeBusyViewOptionsType type
 */
class EWSType_FreeBusyViewOptionsType extends EWSType
{
    /**
     * TimeWindow property
     *
     * @var EWSType_Duration
     */
    public $TimeWindow;

    /**
     * MergedFreeBusyIntervalInMinutes property
     *
     * @var integer
     */
    public $MergedFreeBusyIntervalInMinutes;

    /**
     * RequestedView property
     *
     * @var EWSType_FreeBusyViewType
     */
    public $RequestedView;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'TimeWindow',
                'required' => false,
                'type' => 'Duration',
            ),
            array(
                'name' => 'MergedFreeBusyIntervalInMinutes',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'RequestedView',
                'required' => false,
                'type' => 'FreeBusyViewType',
            ),
        );
    }
}
