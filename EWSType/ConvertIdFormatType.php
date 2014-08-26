<?php
/**
 * Definition of the ConvertIdFormatType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Defines the supported identifier formats for identifier conversion operations.
 */
class EWSType_ConvertIdFormatType extends EWSType
{
    /**
     * The Exchange Web Services (EWS) identifier format that is used in the initial release version of Exchange Server 2007.
     *
     * @var string
     */
    const EWS_LEGACY_ID = 'EwsLegacyId';
    
    /**
     * The EWS identifier format that is used in Exchange 2007 Service Pack 1 (SP1) and later versions of Exchange Server. 
     *
     * @var string
     */
    const EWS_ID = 'EwsId';
    
    /**
     * The base64-encoded PR_ENTRYID property.
     *
     * @var string
     */
    const ENTRY_ID = 'EntryId';
    
    /**
     * The hexadecimal representation of the PR_ENTRYID property.
     *
     * @var string
     */
    const HEX_ENTRY_ID = 'HexEntryId';
    
    /**
     * The Exchange Store identifier format.
     *
     * @var string
     */
    const STORE_ID = 'StoreId';
    
    /**
     * The Outlook Web App identifier format. This value applies to Exchange 2007 and Exchange 2010.
     *
     * @var string
     */
    const OWA_ID = 'OwaId';
    
    
}
