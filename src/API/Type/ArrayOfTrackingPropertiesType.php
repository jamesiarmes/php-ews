<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ArrayOfTrackingPropertiesType
 *
 *
 * XSD Type: ArrayOfTrackingPropertiesType
 *
 * @method ArrayOfTrackingPropertiesType addTrackingPropertyType(TrackingPropertyType $trackingPropertyType)
 * @method TrackingPropertyType[] getTrackingPropertyType()
 * @method ArrayOfTrackingPropertiesType setTrackingPropertyType(array $trackingPropertyType)
 */
class ArrayOfTrackingPropertiesType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\TrackingPropertyType[]
     */
    protected $trackingPropertyType = null;
}
