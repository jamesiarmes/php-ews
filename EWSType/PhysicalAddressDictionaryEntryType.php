<?php
/**
 * Definition of the PhysicalAddressDictionaryEntryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PhysicalAddressDictionaryEntryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PhysicalAddressDictionaryEntryType extends EWSType {
	/**
	 * Street property
	 * 
	 * @var string
	 */
	public $Street;

	/**
	 * City property
	 * 
	 * @var string
	 */
	public $City;

	/**
	 * State property
	 * 
	 * @var string
	 */
	public $State;

	/**
	 * CountryOrRegion property
	 * 
	 * @var string
	 */
	public $CountryOrRegion;

	/**
	 * PostalCode property
	 * 
	 * @var string
	 */
	public $PostalCode;

	/**
	 * Key property
	 * 
	 * @var EWSType_PhysicalAddressKeyType
	 */
	public $Key;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Street',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'City',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'State',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'CountryOrRegion',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'PostalCode',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Key',
				'required' => false,
				'type' => 'PhysicalAddressKeyType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PhysicalAddressDictionaryEntryType