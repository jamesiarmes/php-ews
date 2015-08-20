<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetServerTimeZonesType
 *
 *
 * XSD Type: GetServerTimeZonesType
 *
 * @method boolean getReturnFullTimeZoneData()
 * @method GetServerTimeZonesType setReturnFullTimeZoneData(boolean $returnFullTimeZoneData)
 * @method array getIds()
 * @method GetServerTimeZonesType setIds(array $ids)
 */
class GetServerTimeZonesType extends BaseRequestType
{

    /**
     * @var boolean
     */
    protected $returnFullTimeZoneData = null;

    /**
     * @var string[]
     */
    protected $ids = null;
}
