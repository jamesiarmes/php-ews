<?php
/**
 * Definition of the ContactsViewType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ContactsViewType type
 */
class ContactsViewType extends PhpEws\EWSType
{
    /**
     * InitialName property
     *
     * @var string
     */
    public $InitialName;

    /**
     * FinalName property
     *
     * @var string
     */
    public $FinalName;
}
