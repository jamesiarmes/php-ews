<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing DeletedOccurrenceInfoType
 *
 *
 * XSD Type: DeletedOccurrenceInfoType
 *
 * @method DeletedOccurrenceInfoType getStart()
 * @method DeletedOccurrenceInfoType setStart($start)
 */
class DeletedOccurrenceInfoType extends TypeTest
{

    /**
     * @property \DateTime $start
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
    );


}

