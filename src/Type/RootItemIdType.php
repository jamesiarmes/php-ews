<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RootItemIdType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Identifies the root item of a deleted item.
 *
 * @package php-ews\Type
 */
class RootItemIdType extends BaseItemIdType
{
    /**
     * Identifies the new change key of the root item of a deleted item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemChangeKey;

    /**
     * Identifies the root item of a deleted item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RootItemId;
}
