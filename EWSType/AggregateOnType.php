<?php
/**
 * Definition of the AggregateOnType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AggregateOnType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AggregateOnType extends EWSType {
	/**
	 * FieldURI property
	 * 
	 * @var EWSType_PathToUnindexedFieldType
	 */
	public $FieldURI;

	/**
	 * IndexedFieldURI property
	 * 
	 * @var EWSType_PathToIndexedFieldType
	 */
	public $IndexedFieldURI;

	/**
	 * ExtendedFieldURI property
	 * 
	 * @var EWSType_PathToExtendedFieldType
	 */
	public $ExtendedFieldURI;

	/**
	 * Aggregate property
	 * 
	 * @var EWSType_AggregateType
	 */
	public $Aggregate;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FieldURI',
				'required' => false,
				'type' => 'PathToUnindexedFieldType',
			),
			array(
				'name' => 'IndexedFieldURI',
				'required' => false,
				'type' => 'PathToIndexedFieldType',
			),
			array(
				'name' => 'ExtendedFieldURI',
				'required' => false,
				'type' => 'PathToExtendedFieldType',
			),
			array(
				'name' => 'Aggregate',
				'required' => false,
				'type' => 'AggregateType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AggregateOnType