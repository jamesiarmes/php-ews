<?php
/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfDeletedOccurrencesType extends EWSType {
	/**
	 * DeletedOccurrence property
	 * 
	 * @var EWSType_DeletedOccurrenceInfoType
	 */
	public $DeletedOccurrence;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'DeletedOccurrence',
				'required' => false,
				'type' => 'DeletedOccurrenceInfoType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfDeletedOccurrencesType