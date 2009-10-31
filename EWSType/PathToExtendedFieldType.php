<?php
/**
 * Definition of the PathToExtendedFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PathToExtendedFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PathToExtendedFieldType extends EWSType {
	/**
	 * DistinguishedPropertySetId property
	 * 
	 * @var EWSType_DistinguishedPropertySetType
	 */
	public $DistinguishedPropertySetId;

	/**
	 * PropertySetId property
	 * 
	 * @var EWSType_GuidType
	 */
	public $PropertySetId;

	/**
	 * PropertyTag property
	 * 
	 * @var EWSType_PropertyTagType
	 */
	public $PropertyTag;

	/**
	 * PropertyName property
	 * 
	 * @var string
	 */
	public $PropertyName;

	/**
	 * PropertyId property
	 * 
	 * @var EWSType_int
	 */
	public $PropertyId;

	/**
	 * PropertyType property
	 * 
	 * @var EWSType_MapiPropertyTypeType
	 */
	public $PropertyType;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'DistinguishedPropertySetId',
				'required' => false,
				'type' => 'DistinguishedPropertySetType',
			),
			array(
				'name' => 'PropertySetId',
				'required' => false,
				'type' => 'GuidType',
			),
			array(
				'name' => 'PropertyTag',
				'required' => false,
				'type' => 'PropertyTagType',
			),
			array(
				'name' => 'PropertyName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'PropertyId',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'PropertyType',
				'required' => false,
				'type' => 'MapiPropertyTypeType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PathToExtendedFieldType