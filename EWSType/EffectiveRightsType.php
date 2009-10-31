<?php
/**
 * Definition of the EffectiveRightsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the EffectiveRightsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_EffectiveRightsType extends EWSType {
	/**
	 * CreateAssociated property
	 * 
	 * @var EWSType_boolean
	 */
	public $CreateAssociated;

	/**
	 * CreateContents property
	 * 
	 * @var EWSType_boolean
	 */
	public $CreateContents;

	/**
	 * CreateHierarchy property
	 * 
	 * @var EWSType_boolean
	 */
	public $CreateHierarchy;

	/**
	 * Delete property
	 * 
	 * @var EWSType_boolean
	 */
	public $Delete;

	/**
	 * Modify property
	 * 
	 * @var EWSType_boolean
	 */
	public $Modify;

	/**
	 * Read property
	 * 
	 * @var EWSType_boolean
	 */
	public $Read;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'CreateAssociated',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'CreateContents',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'CreateHierarchy',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'Delete',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'Modify',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'Read',
				'required' => false,
				'type' => 'boolean',
			),
		); // end $this->schema
	} // end function __construct()
} // end class EffectiveRightsType