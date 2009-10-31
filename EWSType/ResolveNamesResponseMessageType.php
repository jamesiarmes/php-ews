<?php
/**
 * Definition of the ResolveNamesResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ResolveNamesResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ResolveNamesResponseMessageType extends EWSType {
	/**
	 * ResolutionSet property
	 * 
	 * @var EWSType_ArrayOfResolutionType
	 */
	public $ResolutionSet;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ResolutionSet',
				'required' => false,
				'type' => 'ArrayOfResolutionType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ResolveNamesResponseMessageType