<?php
/**
 * Contains EWSType_IdFormatType.
 */

/**
 * Specifies the source format of the Id to be converted or the format of the Id
 * after conversion.
 *
 * @package php-ews\Enumerations
 */
class EWSType_IdFormatType extends EWSType
{
    /**
     * Describes MAPI identifiers, as in the PR_ENTRYID property.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const ENTRY_ID = 'EntryId';

    /**
     * Describes identifiers that are produced by Exchange Web Services starting
     * with Exchange 2007 SP1.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const EWS_ID = 'EwsId';

    /**
     * Describes identifiers that are produced by Exchange Web Services in the
     * initial release version of Exchange 2007.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const EWS_LEGACY_ID = 'EwsLegacyId';

    /**
     * Describes a hexadecimal-encoded representation of the PR_ENTRYID
     * property.
     *
     * This is the format of availability calendar event identifiers.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const HEX_ENTRY_ID = 'HexEntryId';

    /**
     * Describes a Microsoft Office Outlook Web Access identifier.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const OWA_ID = 'OwaId';

    /**
     * Describes Exchange store identifiers.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const STORE_ID = 'StoreId';

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
