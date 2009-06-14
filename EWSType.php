<?php
/**
 * Base class for Exchange Web Service Types
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Base class for Exchange Web Service Types
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWS_Types {
	/**
	 * Schema definition for the type object
	 * 
	 * @var array
	 */
	protected $schema = array();

	/**
	 * Constructor
	 */
	public abstract function __construct();
} // end class EWS_Types