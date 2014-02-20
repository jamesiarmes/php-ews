<?php
/**
 * Definition of the WellKnownResponseObjectType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the WellKnownResponseObjectType type
 */
class EWSType_WellKnownResponseObjectType extends EWSType
{
    /**
     * ItemClass property
     *
     * @var EWSType_ItemClassType
     */
    public $ItemClass;

    /**
     * Sensitivity property
     *
     * @var EWSType_SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Body property
     *
     * @var EWSType_BodyType
     */
    public $Body;

    /**
     * Attachments property
     *
     * @var EWSType_NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * InternetMessageHeaders property
     *
     * @var EWSType_NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Sender property
     *
     * @var EWSType_SingleRecipientType
     */
    public $Sender;

    /**
     * ToRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * CcRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * BccRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
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
     * @var EWSType_SingleRecipientType
     */
    public $From;

    /**
     * ReferenceItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
