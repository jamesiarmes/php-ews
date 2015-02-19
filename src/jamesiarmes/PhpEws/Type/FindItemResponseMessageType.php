<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FindItemResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single FindItem operation request.
 *
 * @package php-ews\Types
 */
class FindItemResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the results from a search of a single root folder during a
     * FindItem operation.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FindItemParentType
     */
    public $RootFolder;
}
