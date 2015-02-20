<?php
/**
 * Contains AlternateIdBaseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for alternate id types.
 *
 * @package jamesiarmes\EWS\Types
 */
abstract class AlternateIdBaseType extends EWSType
{
    /**
     * Describes the source or destination format in a request.
     *
     * @since Exchange 2007 SP1
     *
     * @var IdFormatType
     */
    public $Format;
}
