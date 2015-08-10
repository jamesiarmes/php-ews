<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindMailboxStatisticsByKeywordsType
 *
 * Request type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsType
 *
 * @method FindMailboxStatisticsByKeywordsType getMailboxes()
 * @method FindMailboxStatisticsByKeywordsType setMailboxes($mailboxes)
 * @method FindMailboxStatisticsByKeywordsType getKeywords()
 * @method FindMailboxStatisticsByKeywordsType setKeywords($keywords)
 * @method FindMailboxStatisticsByKeywordsType getLanguage()
 * @method FindMailboxStatisticsByKeywordsType setLanguage($language)
 * @method FindMailboxStatisticsByKeywordsType getSenders()
 * @method FindMailboxStatisticsByKeywordsType setSenders($senders)
 * @method FindMailboxStatisticsByKeywordsType getRecipients()
 * @method FindMailboxStatisticsByKeywordsType setRecipients($recipients)
 * @method FindMailboxStatisticsByKeywordsType getFromDate()
 * @method FindMailboxStatisticsByKeywordsType setFromDate($fromDate)
 * @method FindMailboxStatisticsByKeywordsType getToDate()
 * @method FindMailboxStatisticsByKeywordsType setToDate($toDate)
 * @method FindMailboxStatisticsByKeywordsType getMessageTypes()
 * @method FindMailboxStatisticsByKeywordsType setMessageTypes($messageTypes)
 * @method FindMailboxStatisticsByKeywordsType getSearchDumpster()
 * @method FindMailboxStatisticsByKeywordsType setSearchDumpster($searchDumpster)
 * @method FindMailboxStatisticsByKeywordsType getIncludePersonalArchive()
 * @method FindMailboxStatisticsByKeywordsType
 * setIncludePersonalArchive($includePersonalArchive)
 * @method FindMailboxStatisticsByKeywordsType getIncludeUnsearchableItems()
 * @method FindMailboxStatisticsByKeywordsType
 * setIncludeUnsearchableItems($includeUnsearchableItems)
 */
class FindMailboxStatisticsByKeywordsType extends BaseRequestType
{

    /**
     * @property array $mailboxes
     */
    protected $mailboxes = null;

    /**
     * @property array $keywords
     */
    protected $keywords = null;

    /**
     * @property string $language
     */
    protected $language = null;

    /**
     * @property array $senders
     */
    protected $senders = null;

    /**
     * @property array $recipients
     */
    protected $recipients = null;

    /**
     * @property \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @property \DateTime $toDate
     */
    protected $toDate = null;

    /**
     * @property array $messageTypes
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

