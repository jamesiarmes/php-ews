<?php
/**
 * Definition of the SearchFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SearchFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SearchFolderType extends EWSType {
	/**
	 * SearchParameters property
	 * 
	 * @var EWSType_SearchParametersType
	 */
	public $SearchParameters;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SearchParameters',
				'required' => false,
				'type' => 'SearchParametersType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SearchFolderType