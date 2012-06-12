<?php
/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfItemChangesType extends EWSType_NonEmptyArray {
	/**
	 * ItemChange property. Array of EWSType_ItemChangeType objects.
	 * 
	 * @var array
	 */
	protected $ItemChange = array();
	
	public function &getProperty() {
		return $this->ItemChange;
	}
} // end class NonEmptyArrayOfItemChangesType