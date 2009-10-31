<?php
/**
 * Definition of the FractionalPageViewType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FractionalPageViewType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FractionalPageViewType extends EWSType {
	/**
	 * Numerator property
	 * 
	 * @var EWSType_int
	 */
	public $Numerator;

	/**
	 * Denominator property
	 * 
	 * @var EWSType_int
	 */
	public $Denominator;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Numerator',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'Denominator',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FractionalPageViewType