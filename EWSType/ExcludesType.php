<?php
/**
 * Definition of the ExcludesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ExcludesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ExcludesType extends EWSType {
	/**
	 * Path property
	 * 
	 * @var EWSType_BasePathToElementType
	 */
	public $Path;

	/**
	 * Bitmask property
	 * 
	 * @var EWSType_ExcludesValueType
	 */
	public $Bitmask;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Path',
				'required' => false,
				'type' => 'BasePathToElementType',
			),
			array(
				'name' => 'Bitmask',
				'required' => false,
				'type' => 'ExcludesValueType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ExcludesType