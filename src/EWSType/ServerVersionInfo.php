<?php
/**
 * Contains EWSType_ServerVersionInfo.
 */

/**
 * Represents the Microsoft Exchange Server version number.
 *
 * @package php-ews\Types
 */
class EWSType_ServerVersionInfo extends EWSType
{
    /**
     * Describes the major version number.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MajorVersion;

    /**
     * Describes the minor version number.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MinorVersion;

    /**
     * Describes the major build number.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MajorBuildNumber;

    /**
     * Describes the minor build number.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MinorBuildNumber;

    /**
     * Describes the Exchange Web Services (EWS) schema version.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Version;
}
