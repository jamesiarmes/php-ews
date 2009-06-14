<?php
/**
 * Definition of the PathToExceptionFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PathToExceptionFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PathToExceptionFieldType {
	/**
	 * FieldURI property
	 * 
	 * @var EWSType_ExceptionPropertyURIType
	 */
	public $FieldURI;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'FieldURI',
				'required' => false,
				'type' => 'ExceptionPropertyURIType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PathToExceptionFieldType