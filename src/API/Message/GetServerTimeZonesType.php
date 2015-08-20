<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetServerTimeZonesType
 *
 *
 * XSD Type: GetServerTimeZonesType
 *
 * @method GetServerTimeZonesType getReturnFullTimeZoneData()
 * @method GetServerTimeZonesType setReturnFullTimeZoneData(boolean $returnFullTimeZoneData)
 * @method GetServerTimeZonesType getIds()
 * @method GetServerTimeZonesType setIds(array $ids)
 */
class GetServerTimeZonesType extends BaseRequestType
{

    /**
     * @property boolean $returnFullTimeZoneData
     */
    protected $returnFullTimeZoneData = null;

    /**
     * @property string[] $ids
     */
    protected $ids = null;
}
