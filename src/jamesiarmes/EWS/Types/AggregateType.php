<?php

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * The AggregateType enumeration identifies whether the maximum or minimum value of a representative property is used
 * to order the items in a group.
 *
 * **NOTICE **
 *
 * When you are using aggregation to sort items within a group, you must identify a representative property by which to
 * sort the groups. Use the AggregateOn property to specify the representative property and the Aggregate property to
 * indicate whether the groups are sorted according to the maximum or the minimum value of the identified property.
 * The Aggregate property value is set to one of the following AggregateType enumeration values:
 *
 * Maximum
 * Minimum
 *
 * If the Aggregate property is set to Maximum, the groups are sorted starting with the largest value for the
 * AggregateOn property. If the Aggregate attribute is set to Minimum, the groups are sorted starting with the smallest
 * value for the AggregateOn property.
 *
 * For example, if you want to issue a FindItem grouped query, grouping by sender, but you want to order the groups so
 * that the group that has the most recent e-mail is on top, you can group by sender and aggregate on date/time received
 * with an Aggregate property of Maximum.
 *
 *
 * @package jamesiarmes\EWS\Types
 *
 * @link    https://technet.microsoft.com/en-us/sqlserver/exchangewebservices.aggregatetype%28v=EXCHG.140%29
 */
class AggregateType extends EWSType
{
    /**
     * Indicates that the groups are sorted starting with the smallest value for the AggregateOn property.
     *
     * @var boolean $minimum
     */
    public $minimum = false;

    /**
     * Indicates that the groups are sorted starting with the largest value for the AggregateOn property.
     *
     * @var boolean $maximum
     */
    public $maximum = false;
}
