<?php
/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfInternetHeadersType extends EWSType {
	/**
	 * InternetMessageHeader property
	 * 
	 * @var EWSType_InternetHeaderType
	 */
	public $InternetMessageHeader;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'InternetMessageHeader',
				'required' => false,
				'type' => 'InternetHeaderType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfInternetHeadersType