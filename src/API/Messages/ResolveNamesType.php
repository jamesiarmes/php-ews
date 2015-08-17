<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing ResolveNamesType
 *
 *
 * XSD Type: ResolveNamesType
 *
 * @method ResolveNamesType getReturnFullContactData()
 * @method ResolveNamesType setReturnFullContactData(boolean $returnFullContactData)
 * @method ResolveNamesType getSearchScope()
 * @method ResolveNamesType setSearchScope(string $searchScope)
 * @method ResolveNamesType getContactDataShape()
 * @method ResolveNamesType setContactDataShape(string $contactDataShape)
 * @method ResolveNamesType getParentFolderIds()
 * @method ResolveNamesType setParentFolderIds(\jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 * @method ResolveNamesType getUnresolvedEntry()
 * @method ResolveNamesType setUnresolvedEntry(string $unresolvedEntry)
 */
class ResolveNamesType extends BaseRequestType
{

    /**
     * @property boolean $returnFullContactData
     */
    protected $returnFullContactData = null;

    /**
     * @property string $searchScope
     */
    protected $searchScope = null;

    /**
     * @property string $contactDataShape
     */
    protected $contactDataShape = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseFolderIdsType
     * $parentFolderIds
     */
    protected $parentFolderIds = null;

    /**
     * @property string $unresolvedEntry
     */
    protected $unresolvedEntry = null;


}

