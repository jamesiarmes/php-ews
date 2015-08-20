<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing DistributionListType
 *
 *
 * XSD Type: DistributionListType
 *
 * @method string getDisplayName()
 * @method DistributionListType setDisplayName(string $displayName)
 * @method string getFileAs()
 * @method DistributionListType setFileAs(string $fileAs)
 * @method string getContactSource()
 * @method DistributionListType setContactSource(string $contactSource)
 * @method DistributionListType addMembers(MemberType $members)
 * @method MemberType[] getMembers()
 * @method DistributionListType setMembers(array $members)
 */
class DistributionListType extends ItemType
{

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var string
     */
    protected $fileAs = null;

    /**
     * @var string
     */
    protected $contactSource = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\MemberType[]
     */
    protected $members = null;
}
