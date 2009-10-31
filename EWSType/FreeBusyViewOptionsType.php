<?php
/**
 * Definition of the FreeBusyViewOptionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FreeBusyViewOptionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FreeBusyViewOptionsType extends EWSType {
	/**
	 * TimeWindow property
	 * 
	 * @var EWSType_Duration
	 */
	public $TimeWindow;

	/**
	 * MergedFreeBusyIntervalInMinutes property
	 * 
	 * @var EWSType_int
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
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'TimeWindow',
				'required' => false,
				'type' => 'Duration',
			),
			array(
				'name' => 'MergedFreeBusyIntervalInMinutes',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'RequestedView',
				'required' => false,
				'type' => 'FreeBusyViewType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FreeBusyViewOptionsType