<?php
/**
 * Contains EWSType_AlternateIdBaseType.
 */

/**
 * Base class for alternate id types.
 *
 * @package php-ews\Types
 */
abstract class EWSType_AlternateIdBaseType extends EWSType
{
    /**
     * Describes the source or destination format in a request.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Enumeration\IdFormatType
     */
    public $Format;
}
