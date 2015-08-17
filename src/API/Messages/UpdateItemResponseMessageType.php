<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing UpdateItemResponseMessageType
 *
 *
 * XSD Type: UpdateItemResponseMessageType
 *
 * @method UpdateItemResponseMessageType getConflictResults()
 * @method UpdateItemResponseMessageType setConflictResults(\jamesiarmes\PEWS\API\TypeTest\ConflictResultsType $conflictResults)
 */
class UpdateItemResponseMessageType extends ItemInfoResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ConflictResultsType $conflictResults
     */
    protected $conflictResults = null;


}

