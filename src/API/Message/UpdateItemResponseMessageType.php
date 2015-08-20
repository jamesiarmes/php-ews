<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateItemResponseMessageType
 *
 *
 * XSD Type: UpdateItemResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\ConflictResultsType getConflictResults()
 * @method UpdateItemResponseMessageType setConflictResults(\jamesiarmes\PEWS\API\Type\ConflictResultsType $conflictResults)
 */
class UpdateItemResponseMessageType extends ItemInfoResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ConflictResultsType
     */
    protected $conflictResults = null;
}
