<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ModifiedEventType
 *
 *
 * XSD Type: ModifiedEventType
 *
 * @method integer getUnreadCount()
 * @method ModifiedEventType setUnreadCount(integer $unreadCount)
 */
class ModifiedEventType extends BaseObjectChangedEventType
{

    /**
     * @var integer
     */
    protected $unreadCount = null;
}
