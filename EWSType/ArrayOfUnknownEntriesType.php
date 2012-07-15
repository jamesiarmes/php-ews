<?php
/**
 * Definition of the ArrayOfUnknownEntriesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfUnknownEntriesType type
 */
class EWSType_ArrayOfUnknownEntriesType extends EWSType
{
    /**
     * UnknownEntry property
     *
     * @var string
     */
    public $UnknownEntry;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'UnknownEntry',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
