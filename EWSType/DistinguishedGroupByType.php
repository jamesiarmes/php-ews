<?php
/**
 * Definition of the DistinguishedGroupByType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DistinguishedGroupByType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DistinguishedGroupByType extends EWSType {
	/**
	 * StandardGroupBy property
	 * 
	 * @var EWSType_StandardGroupByType
	 */
	public $StandardGroupBy;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'StandardGroupBy',
				'required' => false,
				'type' => 'StandardGroupByType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DistinguishedGroupByType