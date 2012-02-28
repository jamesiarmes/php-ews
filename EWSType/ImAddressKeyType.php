<?php
/**
 * Definition of the ImAddressKeyType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Instant messenger address key type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ImAddressKeyType extends EWSType {
	/**
	 * Instant messenger ket for instant messenger address one.
	 * 
	 * @var string
	 */
	const IM_ADDRESS_1 = 'ImAddress1';
    
	/**
	 * Instant messenger ket for instant messenger address two.
	 * 
	 * @var string
	 */
	const IM_ADDRESS_2 = 'ImAddress2';
    
	/**
	 * Instant messenger ket for instant messenger address three.
	 * 
	 * @var string
	 */
	const IM_ADDRESS_3 = 'ImAddress3';
	
	/**
	 * Value of the desired mapping. Should be one of the constants from the
	 * EWSType_ImAddressKeyType class.
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
} // end class EWSType_ImAddressKeyType
