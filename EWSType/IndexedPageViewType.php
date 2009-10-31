<?php
/**
 * Definition of the IndexedPageViewType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the IndexedPageViewType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_IndexedPageViewType extends EWSType {
	/**
	 * Offset property
	 * 
	 * @var EWSType_int
	 */
	public $Offset;

	/**
	 * BasePoint property
	 * 
	 * @var EWSType_IndexBasePointType
	 */
	public $BasePoint;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Offset',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'BasePoint',
				'required' => false,
				'type' => 'IndexBasePointType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class IndexedPageViewType