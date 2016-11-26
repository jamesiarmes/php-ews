<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetPersonaType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to get a persona.
 *
 * @package php-ews\Request
 */
class GetPersonaType extends BaseRequestType
{
    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType
     *
     * @todo Update once documentation exists.
     */
    public $AdditionalProperties;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     *
     * @todo Update once documentation exists.
     */
    public $EmailAddress;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     */
    public $ItemLinkId;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \jamesiarmes\PhpEws\Type\TargetFolderIdType
     *
     * @todo Update once documentation exists.
     */
    public $ParentFolderId;

    /**
     * Specifies the persona identifier for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $PersonaId;
}
