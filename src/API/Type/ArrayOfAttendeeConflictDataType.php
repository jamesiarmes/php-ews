<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfAttendeeConflictDataType
 *
 *
 * XSD Type: ArrayOfAttendeeConflictData
 *
 * @method array getUnknownAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setUnknownAttendeeConflictData(array $unknownAttendeeConflictData)
 * @method array getIndividualAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setIndividualAttendeeConflictData(array $individualAttendeeConflictData)
 * @method array getTooBigGroupAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setTooBigGroupAttendeeConflictData(array $tooBigGroupAttendeeConflictData)
 * @method array getGroupAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setGroupAttendeeConflictData(array $groupAttendeeConflictData)
 */
class ArrayOfAttendeeConflictDataType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\UnknownAttendeeConflictDataType[]
     */
    protected $unknownAttendeeConflictData = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IndividualAttendeeConflictDataType[]
     */
    protected $individualAttendeeConflictData = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TooBigGroupAttendeeConflictDataType[]
     */
    protected $tooBigGroupAttendeeConflictData = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\GroupAttendeeConflictDataType[]
     */
    protected $groupAttendeeConflictData = null;
}
