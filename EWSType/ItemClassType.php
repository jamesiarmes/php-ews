<?php
/**
 * Contains EWSType_ItemClassType.
 */

/**
 * Represents the message class of an item.
 *
 * @package php-ews\Enumerations
 */
class EWSType_ItemClassType extends EWSType
{
    /**
     * Class used to identify a form for journal entries.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACTIVITY = 'IPM.Activity';

    /**
     * Class used to identify a form for appointments.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const APPOINTMENT = 'IPM.Appointment';

    /**
     * Class used to identify a form for contacts.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACT = 'IPM.Contact';

    /**
     * Class used to identify a form for distribution lists.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DISTRIBUTION_LIST = 'IPM.DistList';

    /**
     * Class used to identify a form for documents.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DOCUMENT = 'IPM.Document';

    /**
     * Class used to identify a form for items for which the specified form
     * can not be found.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IPM = 'IPM';

    /**
     * Class used to identify a form for e-mail messages.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOTE = 'IPM.Note';

    /**
     * Class used to identify a form for reports from the Internet Mail Connect
     * (the Exchange Server gateway to the Internet).
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOTE_IMC_NOTIFICATION = 'IPM.Note.IMC.Notification';

    /**
     * Class used to identify a form for out-of-office templates.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOTE_RULES_OOF_TEMPLATE_MICROSOFT = 'IPM.Note.Rules.Oof.Template.Microsoft';

    /**
     * Class used to identify a form for editing rule reply templates.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOTE_RULES_REPLYTEMPLATE_MICROSOFT = 'IPM.Note.Rules.ReplyTemplate.Microsoft';

    /**
     * Class used to identify a form for encrypted notes to other people.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOTE_SECURE = 'IPM.Note.Secure';

    /**
     * Class used to identify a form for digitally signed notes to other people.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOTE_SECURE_SIGN = 'IPM.Note.Secure.Sign';

    /**
     * Class used to identify a form for the exception item of a recurrence
     * series.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OLE_CLASS = 'IPM.OLE.Class';

    /**
     * Class used to identify a form for recalling sent messages from recipient
     * Inboxes.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OUTLOOK_RECALL = 'IPM.Outlook.Recall';

    /**
     * Class used to identify a form for posting notes in a folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const POST = 'IPM.Post';

    /**
     * Class used to identify a form for message recall reports.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECALL_REPORT = 'IPM.Recall.Report';

    /**
     * Class used to identify a form for remote Mail message headers.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const REMOTE = 'IPM.Remote';

    /**
     * Class used to identify a form for reporting item status.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const REPORT = 'IPM.Report';

    /**
     * Class used to identify a form for resending a failed message.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RESEND = 'IPM.Resend';

    /**
     * Class used to identify a form for meeting cancellations.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SCHEDULE_MEETING_CANCELED = 'IPM.Schedule.Meeting.Canceled';

    /**
     * Class used to identify a form for meeting requests.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SCHEDULE_MEETING_REQUEST = 'IPM.Schedule.Meeting.Request';

    /**
     * Class used to identify a form for responses to decline meeting requests.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SCHEDULE_MEETING_RESP_NEG = 'IPM.Schedule.Meeting.Resp.Neg';

    /**
     * Class used to identify a form for responses to accept meeting requests.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SCHEDULE_MEETING_RESP_POS = 'IPM.Schedule.Meeting.Resp.Pos';

    /**
     * Class used to identify a form for responses to tentatively accept meeting
     * requests.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SCHEDULE_MEETING_RESP_TENT = 'IPM.Schedule.Meeting.Resp.Tent';

    /**
     * Class used to identify a form for creating notes.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const STICKYNOTE = 'IPM.StickyNote';

    /**
     * Class used to identify a form for tasks.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK = 'IPM.Task';

    /**
     * Class used to identify a form for task requests.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASKREQUEST = 'IPM.TaskRequest';

    /**
     * Class used to identify a form for responses to accept task requests.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASKREQUEST_ACCEPT = 'IPM.TaskRequest.Accept';

    /**
     * Class used to identify a form for responses to desline task requests.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASKREQUEST_DECLINE = 'IPM.TaskRequest.Decline';

    /**
     * Class used to identify a form for updates to requested tasks.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASKREQUEST_UPDATE = 'IPM.TaskRequest.Update';

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
