<?php
/**
 * Definition of the CompleteNameType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the CompleteNameType type
 */
class CompleteNameType extends EWSType
{
    /**
     * Title property
     *
     * @var string
     */
    public $Title;

    /**
     * FirstName property
     *
     * @var string
     */
    public $FirstName;

    /**
     * MiddleName property
     *
     * @var string
     */
    public $MiddleName;

    /**
     * LastName property
     *
     * @var string
     */
    public $LastName;

    /**
     * Suffix property
     *
     * @var string
     */
    public $Suffix;

    /**
     * Initials property
     *
     * @var string
     */
    public $Initials;

    /**
     * FullName property
     *
     * @var string
     */
    public $FullName;

    /**
     * Nickname property
     *
     * @var string
     */
    public $Nickname;

    /**
     * YomiFirstName property
     *
     * @var string
     */
    public $YomiFirstName;

    /**
     * YomiLastName property
     *
     * @var string
     */
    public $YomiLastName;
}
