<?php
/**
 * Definition of the ExchangeImpersonationType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ExchangeImpersonationType type
 */
class EWSType_ExchangeImpersonationType extends EWSType
{
    /**
     * ConnectingSID property
     *
     * @var EWSType_ConnectingSIDType
     */
    public $ConnectingSID;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ConnectingSID',
                'required' => false,
                'type' => 'ConnectingSIDType',
            ),
        );
    }
}
