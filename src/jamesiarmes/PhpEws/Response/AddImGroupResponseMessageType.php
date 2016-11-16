<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\AddImGroupResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * {insert doc block}
 *
 * @package php-ews\Response
 */
class AddImGroupResponseMessageType extends ResponseMessageType
{
    /**
     * Represents the new instant messaging group.
     *
     * @var \jamesiarmes\PhpEws\Type\ImGroupType
     *
     * @since Exchange 2013
     */
    public $ImGroup;
}
