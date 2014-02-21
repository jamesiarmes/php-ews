<?php
/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 */
class NonEmptyArrayOfInternetHeadersType extends PhpEws\EWSType
{
    /**
     * InternetMessageHeader property
     *
     * @var InternetHeaderType
     */
    public $InternetMessageHeader;
}
