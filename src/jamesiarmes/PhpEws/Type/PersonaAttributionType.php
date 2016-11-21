<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PersonaAttributionType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines an instance in an array of attributes for a Persona.
 *
 * @package php-ews\Type
 */
class PersonaAttributionType extends Type
{
    /**
     * Defines the display name of a folder, contact, distribution list,
     * delegate user, or rule.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    public $DisplayName;

    /**
     * Contains the identifier and change key of a folder.
     *
     * @var \jamesiarmes\PhpEws\Type\FolderIdType
     *
     * @since Exchange 2013
     */
    public $FolderId;

    /**
     * Specifies a string that uniquely identifies an app or an attribution in a
     * persona.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    public $Id;

    /**
     * Contains a Boolean value that indicates whether the underlying contact or
     * Active Directory recipient should be hidden or displayed as part of the
     * persona.
     *
     * @var boolean
     *
     * @since Exchange 2013
     */
    public $IsHidden;

    /**
     * Specifies a Boolean value that indicates whether the underlying contact
     * or Active Directory recipient is a quick contact.
     *
     * @var boolean
     *
     * @since Exchange 2013
     */
    public $IsQuickContact;

    /**
     * Specifies whether the underlying contact or Active Directory recipient
     * can be written to.
     *
     * @var boolean
     *
     * @since Exchange 2013
     */
    public $IsWritable;

    /**
     * Specifies the identifier of the contact or Active Directory recipient.
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     *
     * @since Exchange 2013
     */
    public $SourceId;
}
