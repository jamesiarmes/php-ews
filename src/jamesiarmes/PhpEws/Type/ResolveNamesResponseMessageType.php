<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ResolveNamesResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines the status and result of a ResolveNames operation request.
 *
 * @package php-ews\Types
 */
class ResolveNamesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of resolutions for an ambiguous name.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfResolutionType
     */
    public $ResolutionSet;
}
