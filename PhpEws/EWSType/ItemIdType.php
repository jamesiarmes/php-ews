<?php
/**
 * Definition of the ItemIdType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ItemIdType type
 */
class ItemIdType extends PhpEws\EWSType
{
    /**
     * Id property
     *
     * @var string
     */
    public $Id;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;
}
