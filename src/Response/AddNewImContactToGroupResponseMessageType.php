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
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\PersonaType
     */
    public $Persona;
}
