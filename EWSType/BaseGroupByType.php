<?php
/**
 * Definition of the BaseGroupByType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BaseGroupByType type
 */
class EWSType_BaseGroupByType extends EWSType
{
    /**
     * Order property
     *
     * @var EWSType_SortDirectionType
     */
    public $Order;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Order',
                'required' => false,
                'type' => 'SortDirectionType',
            ),
        );
    }
}
