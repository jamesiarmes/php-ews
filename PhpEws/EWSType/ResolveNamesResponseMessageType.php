<?php
/**
 * Definition of the ResolveNamesResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ResolveNamesResponseMessageType type
 */
class ResolveNamesResponseMessageType extends PhpEws\EWSType
{
    /**
     * ResolutionSet property
     *
     * @var ArrayOfResolutionType
     */
    public $ResolutionSet;
}
