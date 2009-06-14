<?php
/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfOccurrenceInfoType {
	/**
	 * Occurrence property
	 * 
	 * @var EWSType_OccurrenceInfoType
	 */
	public $Occurrence;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'Occurrence',
				'required' => false,
				'type' => 'OccurrenceInfoType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfOccurrenceInfoType