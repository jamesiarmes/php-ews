<?php
/**
 * Base class for Exchange Web Service Types
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Base class for Exchange Web Service Types
 */
abstract class EWSType
{
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
}
