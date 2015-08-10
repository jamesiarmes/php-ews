<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing DistributionListType
 *
 *
 * XSD Type: DistributionListType
 *
 * @method DistributionListType getDisplayName()
 * @method DistributionListType setDisplayName($displayName)
 * @method DistributionListType getFileAs()
 * @method DistributionListType setFileAs($fileAs)
 * @method DistributionListType getContactSource()
 * @method DistributionListType setContactSource($contactSource)
 * @method DistributionListType getMembers()
 * @method DistributionListType setMembers($members)
 */
class DistributionListType extends ItemType
{

    /**
     * @property string $displayName
     */
    protected $displayName = null;

    /**
     * @property string $fileAs
     */
    protected $fileAs = null;

    /**
     * @property string $contactSource
     */
    protected $contactSource = null;

    /**
     * @property array $members
     */
    protected $members = null;


}

