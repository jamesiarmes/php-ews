<?php
/**
 * Definition of the AlternateIdBaseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AlternateIdBaseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AlternateIdBaseType extends EWSType {
	/**
	 * Format property
	 * 
	 * @var EWSType_IdFormatType
	 */
	public $Format;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Format',
				'required' => false,
				'type' => 'IdFormatType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AlternateIdBaseType