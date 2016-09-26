<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\UpdateItemResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a single UpdateItem request.
 *
 * @package php-ews\Type
 */
class UpdateItemResponseMessageType extends ItemInfoResponseMessageType
{
    /**
     * Contains the number of conflicts in an UpdateItem response.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ConflictResultsType
     */
    public $ConflictResults;
}
