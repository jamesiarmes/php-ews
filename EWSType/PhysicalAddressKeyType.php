<?php
/**
 * Definition of the PhysicalAddressKeyType type
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Physical address key type
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PhysicalAddressKeyType extends EWSType {
	/**
	 * Business physical address type
	 *
	 * @var string
	 */
	const BUSINESS = 'Business';

	/**
	 * Home physical address type
	 *
	 * @var string
	 */
	const HOME = 'Home';

	/**
	 * Other physical address type
	 *
	 * @var string
	 */
	const OTHER = 'Other';

	/**
	 * Value of the desired mapping. Should be one of the constants from the
	 * EWSType_PhysicalAddressKeyType class.
	 *
	 * @var string
	 */
	public $_;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => '_',
				'required' => true,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()

	/**
	 * Returns the value of this object as a string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->_;
	} // end function __toString()
} // end class EWSType_PhysicalAddressKeyType