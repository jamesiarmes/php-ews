<?php
/**
 * Definition of the MessageXml type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the MessageXml type
 */
class EWSType_MessageXml extends EWSType
{
    /**
     * any property
     *
     * @var string
     */
    public $any;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'any',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
