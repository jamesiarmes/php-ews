<?php
/**
 * Definition of the DistinguishedGroupByType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the DistinguishedGroupByType type
 */
class EWSType_DistinguishedGroupByType extends EWSType
{
    /**
     * StandardGroupBy property
     *
     * @var EWSType_StandardGroupByType
     */
    public $StandardGroupBy;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'StandardGroupBy',
                'required' => false,
                'type' => 'StandardGroupByType',
            ),
        );
    }
}
