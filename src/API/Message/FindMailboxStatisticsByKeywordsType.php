<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsType
 *
 * Request type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsType
 *
 * @method FindMailboxStatisticsByKeywordsType getMailboxes()
 * @method FindMailboxStatisticsByKeywordsType setMailboxes(array $mailboxes)
 * @method FindMailboxStatisticsByKeywordsType getKeywords()
 * @method FindMailboxStatisticsByKeywordsType setKeywords(array $keywords)
 * @method FindMailboxStatisticsByKeywordsType getLanguage()
 * @method FindMailboxStatisticsByKeywordsType setLanguage(string $language)
 * @method FindMailboxStatisticsByKeywordsType getSenders()
 * @method FindMailboxStatisticsByKeywordsType setSenders(array $senders)
 * @method FindMailboxStatisticsByKeywordsType getRecipients()
 * @method FindMailboxStatisticsByKeywordsType setRecipients(array $recipients)
 * @method FindMailboxStatisticsByKeywordsType getFromDate()
 * @method FindMailboxStatisticsByKeywordsType setFromDate(\DateTime $fromDate)
 * @method FindMailboxStatisticsByKeywordsType getToDate()
 * @method FindMailboxStatisticsByKeywordsType setToDate(\DateTime $toDate)
 * @method FindMailboxStatisticsByKeywordsType getMessageTypes()
 * @method FindMailboxStatisticsByKeywordsType setMessageTypes(array $messageTypes)
 * @method FindMailboxStatisticsByKeywordsType getSearchDumpster()
 * @method FindMailboxStatisticsByKeywordsType setSearchDumpster(boolean $searchDumpster)
 * @method FindMailboxStatisticsByKeywordsType getIncludePersonalArchive()
 * @method FindMailboxStatisticsByKeywordsType setIncludePersonalArchive(boolean $includePersonalArchive)
 * @method FindMailboxStatisticsByKeywordsType getIncludeUnsearchableItems()
 * @method FindMailboxStatisticsByKeywordsType setIncludeUnsearchableItems(boolean $includeUnsearchableItems)
 */
class FindMailboxStatisticsByKeywordsType extends BaseRequestType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\UserMailboxType[] $mailboxes
     */
    protected $mailboxes = null;

    /**
     * @property string[] $keywords
     */
    protected $keywords = null;

    /**
     * @property string $language
     */
    protected $language = null;

    /**
     * @property string[] $senders
     */
    protected $senders = null;

    /**
     * @property string[] $recipients
     */
    protected $recipients = null;

    /**
     * @property \DateTime $fromDate
     */
    protected $fromDate = null;

    protected $_typeMap = array(
        'fromDate' => 'dateTime',
        'toDate' => 'dateTime',
    );

    /**
     * @property \DateTime $toDate
     */
    protected $toDate = null;

    /**
     * @property string[] $messageTypes
     */
    protected $messageTypes = null;

    /**
     * @property boolean $searchDumpster
     */
    protected $searchDumpster = null;

    /**
     * @property boolean $includePersonalArchive
     */
    protected $includePersonalArchive = null;

    /**
     * @property boolean $includeUnsearchableItems
     */
    protected $includeUnsearchableItems = null;


}

