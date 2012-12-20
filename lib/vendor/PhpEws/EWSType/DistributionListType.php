<?php
/**
 * Definition of the DistributionListType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the DistributionListType type
 */
class DistributionListType extends EWSType
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
}
