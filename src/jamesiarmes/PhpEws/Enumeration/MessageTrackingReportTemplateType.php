<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\MessageTrackingReportTemplateType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Represents the type of report to get.
 *
 * @package php-ews\Enumeration
 */
class MessageTrackingReportTemplateType extends Enumeration
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
}
