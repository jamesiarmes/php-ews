<?php
/**
 * Definition of the BaseSubscriptionRequestType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseSubscriptionRequestType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseSubscriptionRequestType {
	/**
	 * FolderIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
	 */
	public $FolderIds;

	/**
	 * EventTypes property
	 * 
	 * @var EWSType_NonEmptyArrayOfNotificationEventTypesType
	 */
	public $EventTypes;

	/**
	 * Watermark property
	 * 
	 * @var EWSType_WatermarkType
	 */
	public $Watermark;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseFolderIdsType',
			),
			array(
				'name' => 'EventTypes',
				'required' => false,
				'type' => 'NonEmptyArrayOfNotificationEventTypesType',
			),
			array(
				'name' => 'Watermark',
				'required' => false,
				'type' => 'WatermarkType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseSubscriptionRequestType