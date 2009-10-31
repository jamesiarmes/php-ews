<?php
/**
 * Definition of the BodyTypeResponseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Default shape names for response shapes
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BodyTypeResponseType extends EWSType {
	/**
	 * All properties are retured in the response
	 * 
	 * @var string
	 */
	const BEST = 'Best';
	
	/**
	 * Default properties are returned in the respoonse
	 * 
	 * @var string
	 */
	const HTML = 'HTML';
	
	/**
	 * Plain text body
	 * 
	 * @var string
	 */
	const TEXT = 'Text';
	
	/**
	 * Constructor
	 */
	public function __construct() {
	} // end function __construct()
} // end class EWSType_BodyTypeResponseType