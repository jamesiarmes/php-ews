<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\AddNewImContactToGroupResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines a response to an AddNewImContactToGroup request.
 *
 * @package php-ews\Response
 */
class AddNewImContactToGroupResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies a set of persona data.
     *
     * @var \jamesiarmes\PhpEws\Type\PersonaType
     *
     * @since Exchange 2013
     */
    public $Persona;
}
