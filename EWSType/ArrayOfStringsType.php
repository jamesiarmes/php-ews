<?php
/**
 * Definition of the ArrayOfStringsType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfStringsType type
 */
class EWSType_ArrayOfStringsType extends EWSType
{
    /**
     * String property
     *
     * @var string
     */
    public $String;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'String',
                'required' => false,
                'type' => 'string',
            ),
        );
    }

    /**
     * Properly converts the value of this type to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->String;
    }
}
