<?php
/**
 * Definition of the AttachmentIdType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the AttachmentIdType type
 */
class AttachmentIdType extends PhpEws\EWSType
{
    /**
     * RootItemId property
     *
     * @var string
     */
    public $RootItemId;

    /**
     * RootItemChangeKey property
     *
     * @var string
     */
    public $RootItemChangeKey;
}
