<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ImItemListType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines a list of instant messaging groups and instant messaging contacts.
 *
 * @package php-ews\Type
 */
class ImItemListType extends Type
{
    /**
     * Represents an array of instant messaging (IM) groups.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfImGroupType
     */
    public $Groups;

    /**
     * Specifies an array of personas.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPeopleType
     */
    public $Personas;
}
