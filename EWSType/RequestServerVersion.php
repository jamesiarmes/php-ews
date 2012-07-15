<?php
/**
 * Definition of the RequestServerVersion type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RequestServerVersion type
 */
class EWSType_RequestServerVersion extends EWSType
{
    /**
     * Version property
     *
     * @var EWSType_ExchangeVersionType
     */
    public $Version;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Version',
                'required' => false,
                'type' => 'ExchangeVersionType',
            ),
        );
    }
}
