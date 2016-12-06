<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ResponseObjectType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Base type for reply objects.
 *
 * @package php-ews\Type
 */
abstract class ResponseObjectType extends ResponseObjectCoreType
{
    /**
     * Item identifier that is related to a response object.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ReferenceItemId;
}
