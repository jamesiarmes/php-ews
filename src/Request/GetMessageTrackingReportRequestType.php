<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetMessageTrackingReportRequestType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents the request for the GetMessageTrackingReport Operation to retrieve
 * the full message tracking report for the specified ID.
 *
 * @package php-ews\Request
 */
class GetMessageTrackingReportRequestType extends BaseRequestType
{
    /**
     * Specifies where to perform the search.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\Scope
     */
    public $Scope;

    /**
     * Specifies the type of tracking report to retrieve.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\MessageTrackingReportTemplateType
     */
    public $ReportTemplate;

    /**
     * Specifies a recipient address to use with the specified tracking report.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $RecipientFilter;

    /**
     * Specifies an identity string that was obtained from the
     * FindMessageTrackingReport operation.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageTrackingReportId;

    /**
     * Specifies that the person who is running the task has a privileged role.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $ReturnQueueEvents;

    /**
     * Specifies timing and performance information that will be used to derive
     * the tracking report. This element is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $DiagnosticsLevel;

    /**
     * Specifies a list of one or more tracking properties.
     *
     * This element is optional.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfTrackingPropertiesType
     */
    public $Properties;
}
