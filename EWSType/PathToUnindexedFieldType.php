<?php
/**
 * Definition of the PathToUnindexedFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PathToUnindexedFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PathToUnindexedFieldType extends EWSType {
	/**
	 * FieldURI property
	 * 
	 * @var EWSType_UnindexedFieldURIType
	 */
	public $FieldURI;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FieldURI',
				'required' => false,
				'type' => 'UnindexedFieldURIType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PathToUnindexedFieldType