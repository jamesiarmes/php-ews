<?php
/**
 * Definition of the BasePagingType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BasePagingType type
 */
class EWSType_BasePagingType extends EWSType
{
    /**
     * MaxEntriesReturned property
     *
     * @var integer
     */
    public $MaxEntriesReturned;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'MaxEntriesReturned',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
