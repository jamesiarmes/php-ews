<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing DistributionListType
 *
 *
 * XSD Type: DistributionListType
 *
 * @method DistributionListType getDisplayName()
 * @method DistributionListType setDisplayName(string $displayName)
 * @method DistributionListType getFileAs()
 * @method DistributionListType setFileAs(string $fileAs)
 * @method DistributionListType getContactSource()
 * @method DistributionListType setContactSource(string $contactSource)
 * @method DistributionListType getMembers()
 * @method DistributionListType setMembers(array $members)
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
     * @property \jamesiarmes\PEWS\API\Type\MemberType[] $members
     */
    protected $members = null;


}

