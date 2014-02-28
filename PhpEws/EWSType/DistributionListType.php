<?php
/**
 * Definition of the DistributionListType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the DistributionListType type
 */
class DistributionListType extends PhpEws\EWSType
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
     * @var ContactSourceType
     */
    public $ContactSource;
}
