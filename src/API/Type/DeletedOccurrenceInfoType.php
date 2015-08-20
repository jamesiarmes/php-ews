<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing DeletedOccurrenceInfoType
 *
 *
 * XSD Type: DeletedOccurrenceInfoType
 *
 * @method DeletedOccurrenceInfoType getStart()
 * @method DeletedOccurrenceInfoType setStart(\DateTime $start)
 */
class DeletedOccurrenceInfoType extends Type
{

    /**
     * @property \DateTime $start
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
    );


}

