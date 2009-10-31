<?php
/**
 * Definition of the ConvertIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ConvertIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ConvertIdType extends EWSType {
	/**
	 * SourceIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfAlternateIdsType
	 */
	public $SourceIds;

	/**
	 * DestinationFormat property
	 * 
	 * @var EWSType_IdFormatType
	 */
	public $DestinationFormat;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SourceIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfAlternateIdsType',
			),
			array(
				'name' => 'DestinationFormat',
				'required' => false,
				'type' => 'IdFormatType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ConvertIdType