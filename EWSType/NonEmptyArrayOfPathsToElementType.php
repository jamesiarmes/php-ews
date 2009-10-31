<?php
/**
 * Definition of the NonEmptyArrayOfPathsToElementType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfPathsToElementType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfPathsToElementType extends EWSType {
	/**
	 * Path property
	 * 
	 * @var EWSType_BasePathToElementType
	 */
	public $Path;

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
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfPathsToElementType