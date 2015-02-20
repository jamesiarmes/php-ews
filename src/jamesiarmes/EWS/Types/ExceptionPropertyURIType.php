<?php
/**
 * Contains ExceptionPropertyURIType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines particular errors in a request.
 *
 * This element is only used as part of an error response in the MessageXml
 * node.
 *
 * @package jamesiarmes\EWS\Types
 */
class ExceptionPropertyURIType extends EWSType
{
    /**
     * Identifies a property of an occurrence of a recurring item.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var ExceptionPropertyFieldURIType
     */
    public $FieldURI;
}
