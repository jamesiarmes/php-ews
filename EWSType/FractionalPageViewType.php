<?php
/**
 * Definition of the FractionalPageViewType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FractionalPageViewType type
 */
class EWSType_FractionalPageViewType extends EWSType
{
    /**
     * Numerator property
     *
     * @var integer
     */
    public $Numerator;

    /**
     * Denominator property
     *
     * @var integer
     */
    public $Denominator;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Numerator',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'Denominator',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
