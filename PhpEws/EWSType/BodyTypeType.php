<?php
/**
 * Definition of the BodyTypeType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the BodyTypeType type
 */
class BodyTypeType extends PhpEws\EWSType
{
    /**
     * HTML body type.
     *
     * @var string
     */
    const HTML = 'HTML';

    /**
     * Text body type.
     *
     * @var string
     */
    const TEXT = 'Text';
}
