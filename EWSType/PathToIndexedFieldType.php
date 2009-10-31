<?php
/**
 * Definition of the PathToIndexedFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PathToIndexedFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PathToIndexedFieldType extends EWSType {
	/**
	 * FieldURI property
	 * 
	 * @var EWSType_DictionaryURIType
	 */
	public $FieldURI;

	/**
	 * FieldIndex property
	 * 
	 * @var string
	 */
	public $FieldIndex;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FieldURI',
				'required' => false,
				'type' => 'DictionaryURIType',
			),
			array(
				'name' => 'FieldIndex',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PathToIndexedFieldType