<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateItemResponseMessageType
 *
 *
 * XSD Type: UpdateItemResponseMessageType
 *
 * @method UpdateItemResponseMessageType getConflictResults()
 * @method UpdateItemResponseMessageType setConflictResults(\jamesiarmes\PEWS\API\Type\ConflictResultsType $conflictResults)
 */
class UpdateItemResponseMessageType extends ItemInfoResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ConflictResultsType $conflictResults
     */
    protected $conflictResults = null;
}
