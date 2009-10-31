<?php
/**
 * Definition of the DistributionListType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DistributionListType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DistributionListType extends EWSType {
	/**
	 * DisplayName property
	 * 
	 * @var string
	 */
	public $DisplayName;

	/**
	 * FileAs property
	 * 
	 * @var string
	 */
	public $FileAs;

	/**
	 * ContactSource property
	 * 
	 * @var EWSType_ContactSourceType
	 */
	public $ContactSource;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'DisplayName',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'FileAs',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'ContactSource',
				'required' => false,
				'type' => 'ContactSourceType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DistributionListType