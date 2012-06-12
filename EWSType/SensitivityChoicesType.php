<?php
/**
 * Definition of the SensitivityChoicesType type
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SensitivityChoicesType type
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SensitivityChoicesType extends EWSType
{
	/**
	 * Sensitivity level of the item
	 *
	 * @var string
	 */
	public $_;

	/**
	 * Indiciates theat the item is confidential.
	 *
	 * @var string
	 */
	const CONFIDENTIAL = 'Confidential';

	/**
	 * Indiciates theat the item has a normal sensativity.
	 *
	 * @var string
	 */
	const NORMAL = 'Normal';

	/**
	 * Indiciates theat the item is personal.
	 *
	 * @var string
	 */
	const PERSONAL = 'Personal';

	/**
	 * Indiciates theat the item is private.
	 *
	 * @var string
	 */
	const PRIVATE_ITEM = 'Private';

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->schema = array(
			array(
				'name' => '_',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()

	/**
	 * Converts the object to a string.
	 *
	 * @return string The string representation of the current object.
	 */
	public function __toString()
	{
		return $this->_;
	}
} // end class EWSType_SensitivityChoicesType
