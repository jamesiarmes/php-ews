<?php
/**
 * Definition of the ImportanceChoicesType type
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ImportanceChoicesType type
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ImportanceChoicesType extends EWSType
{
	/**
	 * Importance level of the item.
	 *
	 * @var string
	 */
	public $_;

	/**
	 * High importance level.
	 *
	 * @var string
	 */
	const HIGH = 'High';

	/**
	 * Low importance level.
	 *
	 * @var string
	 */
	const LOW = 'Low';

	/**
	 * Normal importance level.
	 *
	 * @var string
	 */
	const NORMAL = 'Normal';

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
} // end class EWSType_ImportanceChoicesType
