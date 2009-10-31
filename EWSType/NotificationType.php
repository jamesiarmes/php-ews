<?php
/**
 * Definition of the NotificationType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NotificationType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NotificationType extends EWSType {
	/**
	 * SubscriptionId property
	 * 
	 * @var EWSType_SubscriptionIdType
	 */
	public $SubscriptionId;

	/**
	 * PreviousWatermark property
	 * 
	 * @var EWSType_WatermarkType
	 */
	public $PreviousWatermark;

	/**
	 * MoreEvents property
	 * 
	 * @var EWSType_boolean
	 */
	public $MoreEvents;

	/**
	 * CopiedEvent property
	 * 
	 * @var EWSType_MovedCopiedEventType
	 */
	public $CopiedEvent;

	/**
	 * CreatedEvent property
	 * 
	 * @var EWSType_BaseObjectChangedEventType
	 */
	public $CreatedEvent;

	/**
	 * DeletedEvent property
	 * 
	 * @var EWSType_BaseObjectChangedEventType
	 */
	public $DeletedEvent;

	/**
	 * ModifiedEvent property
	 * 
	 * @var EWSType_ModifiedEventType
	 */
	public $ModifiedEvent;

	/**
	 * MovedEvent property
	 * 
	 * @var EWSType_MovedCopiedEventType
	 */
	public $MovedEvent;

	/**
	 * NewMailEvent property
	 * 
	 * @var EWSType_BaseObjectChangedEventType
	 */
	public $NewMailEvent;

	/**
	 * StatusEvent property
	 * 
	 * @var EWSType_BaseNotificationEventType
	 */
	public $StatusEvent;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SubscriptionId',
				'required' => false,
				'type' => 'SubscriptionIdType',
			),
			array(
				'name' => 'PreviousWatermark',
				'required' => false,
				'type' => 'WatermarkType',
			),
			array(
				'name' => 'MoreEvents',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'CopiedEvent',
				'required' => false,
				'type' => 'MovedCopiedEventType',
			),
			array(
				'name' => 'CreatedEvent',
				'required' => false,
				'type' => 'BaseObjectChangedEventType',
			),
			array(
				'name' => 'DeletedEvent',
				'required' => false,
				'type' => 'BaseObjectChangedEventType',
			),
			array(
				'name' => 'ModifiedEvent',
				'required' => false,
				'type' => 'ModifiedEventType',
			),
			array(
				'name' => 'MovedEvent',
				'required' => false,
				'type' => 'MovedCopiedEventType',
			),
			array(
				'name' => 'NewMailEvent',
				'required' => false,
				'type' => 'BaseObjectChangedEventType',
			),
			array(
				'name' => 'StatusEvent',
				'required' => false,
				'type' => 'BaseNotificationEventType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NotificationType