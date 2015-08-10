<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetServerTimeZonesType
 *
 *
 * XSD Type: GetServerTimeZonesType
 *
 * @method GetServerTimeZonesType getReturnFullTimeZoneData()
 * @method GetServerTimeZonesType
 * setReturnFullTimeZoneData($returnFullTimeZoneData)
 * @method GetServerTimeZonesType getIds()
 * @method GetServerTimeZonesType setIds($ids)
 */
class GetServerTimeZonesType extends BaseRequestType
{

    /**
     * @property boolean $returnFullTimeZoneData
     */
    protected $returnFullTimeZoneData = null;

    /**
     * @property array $ids
     */
    protected $ids = null;


}

