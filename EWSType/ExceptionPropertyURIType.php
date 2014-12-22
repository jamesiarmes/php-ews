<?php
/**
 * Contains EWSType_ExceptionPropertyURIType.
 */

/**
 * Defines particular errors in a request.
 *
 * This element is only used as part of an error response in the MessageXml
 * node.
 *
 * @package php-ews\Types
 */
class EWSType_ExceptionPropertyURIType extends EWSType
{
    /**
     * Identifies a property of an occurrence of a recurring item.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExceptionPropertyFieldURIType
     */
    public $FieldURI;
}
