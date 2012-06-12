<?php
/**
 * Definition of the MimeContentType type
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the MimeContentType type
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_MimeContentType extends EWSType {
	/**
	 * A text value that represents a base64Binary MIME stream.
	 *
	 * @var string
	 */
	public $_;

	/**
	 * The International Standards Organization (ISO) name of the character set
	 * used in the MIME message.
	 *
	 * @var string
	 */
	public $CharacterSet;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => '_',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'CharacterSet',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class EWSType_MimeContentType
