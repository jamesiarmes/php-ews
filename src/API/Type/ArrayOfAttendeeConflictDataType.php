<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfAttendeeConflictDataType
 *
 *
 * XSD Type: ArrayOfAttendeeConflictData
 *
 * @method ArrayOfAttendeeConflictDataType getUnknownAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setUnknownAttendeeConflictData(array $unknownAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType getIndividualAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setIndividualAttendeeConflictData(array $individualAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType getTooBigGroupAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setTooBigGroupAttendeeConflictData(array $tooBigGroupAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType getGroupAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setGroupAttendeeConflictData(array $groupAttendeeConflictData)
 */
class ArrayOfAttendeeConflictDataType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\UnknownAttendeeConflictDataType[]
     * $unknownAttendeeConflictData
     */
    protected $unknownAttendeeConflictData = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IndividualAttendeeConflictDataType[]
     * $individualAttendeeConflictData
     */
    protected $individualAttendeeConflictData = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TooBigGroupAttendeeConflictDataType[]
     * $tooBigGroupAttendeeConflictData
     */
    protected $tooBigGroupAttendeeConflictData = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\GroupAttendeeConflictDataType[]
     * $groupAttendeeConflictData
     */
    protected $groupAttendeeConflictData = null;


}

