<?php
/**
 * Definition of the ArrayOfDLExpansionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfDLExpansionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfDLExpansionType extends EWSType {
	/**
	 * Mailbox property
	 * 
	 * @var EWSType_EmailAddressType
	 */
	public $Mailbox;

	/**
	 * IndexedPagingOffset property
	 * 
	 * @var EWSType_int
	 */
	public $IndexedPagingOffset;

	/**
	 * NumeratorOffset property
	 * 
	 * @var EWSType_int
	 */
	public $NumeratorOffset;

	/**
	 * AbsoluteDenominator property
	 * 
	 * @var EWSType_int
	 */
	public $AbsoluteDenominator;

	/**
	 * IncludesLastItemInRange property
	 * 
	 * @var EWSType_boolean
	 */
	public $IncludesLastItemInRange;

	/**
	 * TotalItemsInView property
	 * 
	 * @var EWSType_int
	 */
	public $TotalItemsInView;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Mailbox',
				'required' => false,
				'type' => 'EmailAddressType',
			),
			array(
				'name' => 'IndexedPagingOffset',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'NumeratorOffset',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'AbsoluteDenominator',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'IncludesLastItemInRange',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'TotalItemsInView',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfDLExpansionType