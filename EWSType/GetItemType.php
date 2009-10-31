<?php
/**
 * Definition of the GetItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetItemType extends EWSType {
	/**
	 * ItemShape property
	 * 
	 * @var EWSType_ItemResponseShapeType
	 */
	public $ItemShape;

	/**
	 * ItemIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseItemIdsType
	 */
	public $ItemIds;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemShape',
				'required' => false,
				'type' => 'ItemResponseShapeType',
			),
			array(
				'name' => 'ItemIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseItemIdsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetItemType