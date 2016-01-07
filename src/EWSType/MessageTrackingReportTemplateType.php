<?php
/**
 * Contains EWSType_MessageTrackingReportTemplateType.
 */

/**
 * Represents the type of report to get.
 *
 * @package php-ews\Enumerations
 */
class EWSType_MessageTrackingReportTemplateType extends EWSType
{
    /**
     * Specifies that for a single recipient, the report will display a full
     * history of the events that occurred.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RECIPIENT_PATH = 'RecipientPath';

    /**
     * Specifies that the report will display all the recipients of the message
     * and the delivery status of the message to each recipient.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SUMMARY = 'Summary';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
