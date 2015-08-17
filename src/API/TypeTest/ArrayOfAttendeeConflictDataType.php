<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class ArrayOfAttendeeConflictDataType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UnknownAttendeeConflictDataType[]
     * $unknownAttendeeConflictData
     */
    protected $unknownAttendeeConflictData = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IndividualAttendeeConflictDataType[]
     * $individualAttendeeConflictData
     */
    protected $individualAttendeeConflictData = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TooBigGroupAttendeeConflictDataType[]
     * $tooBigGroupAttendeeConflictData
     */
    protected $tooBigGroupAttendeeConflictData = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\GroupAttendeeConflictDataType[]
     * $groupAttendeeConflictData
     */
    protected $groupAttendeeConflictData = null;


}

