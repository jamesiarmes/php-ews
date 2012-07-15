<?php
/**
 * Definition of the EmailAddressType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the EmailAddressType type
 */
class EWSType_EmailAddressType extends EWSType
{
    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * EmailAddress property
     *
     * @var EWSType_NonEmptyStringType
     */
    public $EmailAddress;

    /**
     * RoutingType property
     *
     * @var EWSType_NonEmptyStringType
     */
    public $RoutingType;

    /**
     * MailboxType property
     *
     * @var EWSType_MailboxTypeType
     */
    public $MailboxType;

    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Name',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'EmailAddress',
                'required' => false,
                'type' => 'NonEmptyStringType',
            ),
            array(
                'name' => 'RoutingType',
                'required' => false,
                'type' => 'NonEmptyStringType',
            ),
            array(
                'name' => 'MailboxType',
                'required' => false,
                'type' => 'MailboxTypeType',
            ),
            array(
                'name' => 'ItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
        );
    }
}
