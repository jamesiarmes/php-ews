<?php
/**
 * Definition of the ResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ResponseMessageType extends EWSType {
	/**
	 * MessageText property
	 * 
	 * @var string
	 */
	public $MessageText;

	/**
	 * ResponseCode property
	 * 
	 * @var EWSType_ResponseCodeType
	 */
	public $ResponseCode;

	/**
	 * DescriptiveLinkKey property
	 * 
	 * @var EWSType_int
	 */
	public $DescriptiveLinkKey;

	/**
	 * MessageXml property
	 * 
	 * @var EWSType_MessageXml
	 */
	public $MessageXml;

	/**
	 * ResponseClass property
	 * 
	 * @var EWSType_ResponseClassType
	 */
	public $ResponseClass;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'MessageText',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'ResponseCode',
				'required' => false,
				'type' => 'ResponseCodeType',
			),
			array(
				'name' => 'DescriptiveLinkKey',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'MessageXml',
				'required' => false,
				'type' => 'MessageXml',
			),
			array(
				'name' => 'ResponseClass',
				'required' => false,
				'type' => 'ResponseClassType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ResponseMessageType