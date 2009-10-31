<?php
/**
 * Definition of the DeleteItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DeleteItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DeleteItemType extends EWSType {
	/**
	 * ItemIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseItemIdsType
	 */
	public $ItemIds;

	/**
	 * DeleteType property
	 * 
	 * @var EWSType_DisposalType
	 */
	public $DeleteType;

	/**
	 * SendMeetingCancellations property
	 * 
	 * @var EWSType_CalendarItemCreateOrDeleteOperationType
	 */
	public $SendMeetingCancellations;

	/**
	 * AffectedTaskOccurrences property
	 * 
	 * @var EWSType_AffectedTaskOccurrencesType
	 */
	public $AffectedTaskOccurrences;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseItemIdsType',
			),
			array(
				'name' => 'DeleteType',
				'required' => false,
				'type' => 'DisposalType',
			),
			array(
				'name' => 'SendMeetingCancellations',
				'required' => false,
				'type' => 'CalendarItemCreateOrDeleteOperationType',
			),
			array(
				'name' => 'AffectedTaskOccurrences',
				'required' => false,
				'type' => 'AffectedTaskOccurrencesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DeleteItemType