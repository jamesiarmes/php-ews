<?php
/**
 * Definition of the DistributionListType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the DistributionListType type
 */
class EWSType_DistributionListType extends EWSType
{
    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * FileAs property
     *
     * @var string
     */
    public $FileAs;

    /**
     * ContactSource property
     *
     * @var EWSType_ContactSourceType
     */
    public $ContactSource;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DisplayName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'FileAs',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'ContactSource',
                'required' => false,
                'type' => 'ContactSourceType',
            ),
        );
    }
}
