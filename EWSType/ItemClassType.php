<?php
/**
 * Definition of the ItemClassType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ItemClassType type
 */
class EWSType_ItemClassType extends EWSType
{
    /**
     * A text value that is consistent with the item's type may be required. For
     * example, if you are creating or updating a message, the IPM.Note or
     * another class that is consistent with a message is required. An empty
     * value is not allowed. But if you are creating or updating an item, an
     * empty type is valid.
     *
     * @var string
     */
    public $_;

    /**
     * Class used to identify a form for journal entries.
     *
     * @var string
     */
    const ACTIVITY = 'IPM.Activity';

    /**
     * Class used to identify a form for appointments.
     *
     * @var string
     */
    const APPOINTMENT = 'IPM.Appointment';

    /**
     * Class used to identify a form for contacts.
     *
     * @var string
     */
    const CONTACT = 'IPM.Contact';

    /**
     * Class used to identify a form for distribution lists.
     *
     * @var string
     */
    const DISTRIBUTION_LIST = 'IPM.DistList';

    /**
     * Class used to identify a form for documents.
     *
     * @var string
     */
    const DOCUMENT = 'IPM.Document';

    /**
     * Class used to identify a form for items for which the specified form
     * can not be found.
     *
     * @var string
     */
    const IPM = 'IPM';

    /**
     * Class used to identify a form for e-mail messages.
     *
     * @var string
     */
    const NOTE = 'IPM.Note';

    /**
     * Class used to identify a form for reports from the Internet Mail Connect
     * (the Exchange Server gateway to the Internet).
     *
     * @var string
     */
    const NOTE_IMC_NOTIFICATION = 'IPM.Note.IMC.Notification';

    /**
     * Class used to identify a form for out-of-office templates.
     *
     * @var string
     */
    const NOTE_RULES_OOF_TEMPLATE_MICROSOFT = 'IPM.Note.Rules.Oof.Template.Microsoft';

    /**
     * Class used to identify a form for editing rule reply templates.
     *
     * @var string
     */
    const NOTE_RULES_REPLYTEMPLATE_MICROSOFT = 'IPM.Note.Rules.ReplyTemplate.Microsoft';

    /**
     * Class used to identify a form for encrypted notes to other people.
     *
     * @var string
     */
    const NOTE_SECURE = 'IPM.Note.Secure';

    /**
     * Class used to identify a form for digitally signed notes to other people.
     *
     * @var string
     */
    const NOTE_SECURE_SIGN = 'IPM.Note.Secure.Sign';

    /**
     * Class used to identify a form for the exception item of a recurrence
     * series.
     *
     * @var string
     */
    const OLE_CLASS = 'IPM.OLE.Class';

    /**
     * Class used to identify a form for recalling sent messages from recipient
     * Inboxes.
     *
     * @var string
     */
    const OUTLOOK_RECALL = 'IPM.Outlook.Recall';

    /**
     * Class used to identify a form for posting notes in a folder.
     *
     * @var string
     */
    const POST = 'IPM.Post';

    /**
     * Class used to identify a form for message recall reports.
     *
     * @var string
     */
    const RECALL_REPORT = 'IPM.Recall.Report';

    /**
     *Class used to identify a form for remote Mail message headers.
     *
     * @var string
     */
    const REMOTE = 'IPM.Remote';

    /**
     * Class used to identify a form for reporting item status.
     *
     * @var string
     */
    const REPORT = 'IPM.Report';

    /**
     * Class used to identify a form for resending a failed message.
     *
     * @var string
     */
    const RESEND = 'IPM.Resend';

    /**
     * Class used to identify a form for meeting cancellations.
     *
     * @var string
     */
    const SCHEDULE_MEETING_CANCELED = 'IPM.Schedule.Meeting.Canceled';

    /**
     * Class used to identify a form for meeting requests.
     *
     * @var string
     */
    const SCHEDULE_MEETING_REQUEST = 'IPM.Schedule.Meeting.Request';

    /**
     * Class used to identify a form for responses to decline meeting requests.
     *
     * @var string
     */
    const SCHEDULE_MEETING_RESP_NEG = 'IPM.Schedule.Meeting.Resp.Neg';

    /**
     * Class used to identify a form for responses to accept meeting requests.
     *
     * @var string
     */
    const SCHEDULE_MEETING_RESP_POS = 'IPM.Schedule.Meeting.Resp.Pos';

    /**
     * Class used to identify a form for responses to tentatively accept meeting
     * requests.
     *
     * @var string
     */
    const SCHEDULE_MEETING_RESP_TENT = 'IPM.Schedule.Meeting.Resp.Tent';

    /**
     * Class used to identify a form for creating notes.
     *
     * @var string
     */
    const STICKYNOTE = 'IPM.StickyNote';

    /**
     * Class used to identify a form for tasks.
     *
     * @var string
     */
    const TASK = 'IPM.Task';

    /**
     * Class used to identify a form for task requests.
     *
     * @var string
     */
    const TASKREQUEST = 'IPM.TaskRequest';

    /**
     * Class used to identify a form for responses to accept task requests.
     *
     * @var string
     */
    const TASKREQUEST_ACCEPT = 'IPM.TaskRequest.Accept';

    /**
     * Class used to identify a form for responses to desline task requests.
     *
     * @var string
     */
    const TASKREQUEST_DECLINE = 'IPM.TaskRequest.Decline';

    /**
     * Class used to identify a form for updates to requested tasks.
     *
     * @var string
     */
    const TASKREQUEST_UPDATE = 'IPM.TaskRequest.Update';

    /**
     * Converts the object to a string.
     *
     * @return string The string representation of the current object.
     */
    public function __toString()
    {
        return $this->_;
    }
}
