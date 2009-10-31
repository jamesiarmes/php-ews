<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfFolderChangeDescriptionsType extends EWSType {
	/**
	 * AppendToFolderField property
	 * 
	 * @var EWSType_AppendToFolderFieldType
	 */
	public $AppendToFolderField;

	/**
	 * SetFolderField property
	 * 
	 * @var EWSType_SetFolderFieldType
	 */
	public $SetFolderField;

	/**
	 * DeleteFolderField property
	 * 
	 * @var EWSType_DeleteFolderFieldType
	 */
	public $DeleteFolderField;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'AppendToFolderField',
				'required' => false,
				'type' => 'AppendToFolderFieldType',
			),
			array(
				'name' => 'SetFolderField',
				'required' => false,
				'type' => 'SetFolderFieldType',
			),
			array(
				'name' => 'DeleteFolderField',
				'required' => false,
				'type' => 'DeleteFolderFieldType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfFolderChangeDescriptionsType