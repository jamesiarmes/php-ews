<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the WellKnownResponseObjectType type
 */
class WellKnownResponseObjectType extends DataType
{
    /**
     * ItemClass property
     *
     * @var ItemClassType
     */
    public $ItemClass;

    /**
     * Sensitivity property
     *
     * @var SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Body property
     *
     * @var BodyType
     */
    public $Body;

    /**
     * Attachments property
     *
     * @var NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * InternetMessageHeaders property
     *
     * @var NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Sender property
     *
     * @var SingleRecipientType
     */
    public $Sender;

    /**
     * ToRecipients property
     *
     * @var ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * CcRecipients property
     *
     * @var ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * BccRecipients property
     *
     * @var ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * IsReadReceiptRequested property
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * IsDeliveryReceiptRequested property
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * From property
     *
     * @var SingleRecipientType
     */
    public $From;

    /**
     * ReferenceItemId property
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
