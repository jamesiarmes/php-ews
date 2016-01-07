<?php
/**
 * Contains EWSType_PostReplyItemBaseType.
 */

/**
 * Base class for posting item replies.
 *
 * @package php-ews\Types
 */
abstract class EWSType_PostReplyItemBaseType extends EWSType
{
    /**
     * Represents the subject for Exchange store items and response objects.
     *
     * The subject is limited to 255 characters.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Subject;

    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var EWSType_BodyType
     */
    public $Body;

    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;
}
