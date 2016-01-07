<?php
/**
 * Contains EWSType_GetMessageTrackingReportRequestType.
 */

/**
 * Represents the request for the GetMessageTrackingReport Operation to retrieve
 * the full message tracking report for the specified ID.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetMessageTrackingReportRequestType extends EWSType
{
    /**
     * Specifies where to perform the search.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ScopeType
     */
    public $Scope;

    /**
     * Specifies the type of tracking report to retrieve.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_MessageTrackingReportTemplateType
     */
    public $ReportTemplate;

    /**
     * Specifies a recipient address to use with the specified tracking report.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var EWSType_EmailAddressType
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
     * @var EWSType_ArrayOfTrackingPropertiesType
     */
    public $Properties;
}
