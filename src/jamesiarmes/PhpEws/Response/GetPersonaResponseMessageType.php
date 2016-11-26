<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetPersonaResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response for a GetPersona request.
 *
 * @package php-ews\Response
 */
class GetPersonaResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies a set of persona data returned by a GetPersona request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\PersonaType
     */
    public $Persona;
}
