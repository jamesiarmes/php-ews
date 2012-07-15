<?php
/**
 * Definition of the ItemIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ItemIdType type
 */
class EWSType_ItemIdType extends EWSType
{
    /**
     * Id property
     *
     * @var string
     */
    public $Id;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Id',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'ChangeKey',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
