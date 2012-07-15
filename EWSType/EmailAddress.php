<?php
/**
 * Definition of the EmailAddress type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the EmailAddress type
 */
class EWSType_EmailAddress extends EWSType
{
    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * Address property
     *
     * @var string
     */
    public $Address;

    /**
     * RoutingType property
     *
     * @var string
     */
    public $RoutingType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Name',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Address',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'RoutingType',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
