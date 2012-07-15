<?php
/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 */
class EWSType_NonEmptyArrayOfTimeZoneIdType extends EWSType
{
    /**
     * Array of string timezone identifiers (ex. "Eastern Standard Time").
     *
     * @var array
     */
    public $Id;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Id',
                'required' => true,
                'type' => 'array',
            ),
        );
    }
}
