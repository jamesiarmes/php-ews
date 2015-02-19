<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\EffectiveRightsType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the client's rights based on the permission settings for an item
 * or folder.
 *
 * @package php-ews\Type
 */
class EffectiveRightsType extends Type
{
    /**
     * Indicates whether a client can create an associated contents table.
     *
     * This property is only used on folder objects.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $CreateAssociated;

    /**
     * Indicates whether a client can create a contents table.
     *
     * This property is only used on folder objects.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $CreateContents;

    /**
     * Indicates whether a client can create a hierarchy table.
     *
     * This property is only used on folder objects.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $CreateHierarchy;

    /**
     * Indicates whether a client can delete a folder or item.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $Delete;

    /**
     * Indicates whether a client can modify a folder or item.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $Modify;

    /**
     * Indicates whether a client can read a folder or item.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $Read;

    /**
     * Indicates whether a private item can be viewed.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $ViewPrivateItems;
}
