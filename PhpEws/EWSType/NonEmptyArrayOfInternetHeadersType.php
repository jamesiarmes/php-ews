<?php
/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 */
class NonEmptyArrayOfInternetHeadersType extends EWSType
{
    /**
     * InternetMessageHeader property
     *
     * @var EWSType_InternetHeaderType
     */
    public $InternetMessageHeader;
}
