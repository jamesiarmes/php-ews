<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ExceptionPropertyURIType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines particular errors in a request.
 *
 * This element is only used as part of an error response in the MessageXml
 * node.
 *
 * @package php-ews\Type
 */
class ExceptionPropertyURIType extends Type
{
    /**
     * Identifies a property of an occurrence of a recurring item.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Enumeration\ExceptionPropertyURIType
     */
    public $FieldURI;
}
