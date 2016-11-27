<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\MarkAsJunkType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines the request to move an item to the junk mail folder and to add the
 * sender to the blocked sender list.
 *
 * @package php-ews\Request
 */
class MarkAsJunkType extends BaseRequestType
{
    /**
     * Whether or not to add the sender to the blocked sender list.
     *
     * If false, and the user is already on the blocked sender list, they will
     * be removed.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $IsJunk;

    /**
     * Contains the unique identities of items to be marked as junk.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * Whether or not to move the item to the default junk mail folder.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $MoveItem;
}
