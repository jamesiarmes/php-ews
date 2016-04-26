<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing CompleteNameType
 *
 *
 * XSD Type: CompleteNameType
 *
 * @method string getTitle()
 * @method CompleteNameType setTitle(string $title)
 * @method string getFirstName()
 * @method CompleteNameType setFirstName(string $firstName)
 * @method string getMiddleName()
 * @method CompleteNameType setMiddleName(string $middleName)
 * @method string getLastName()
 * @method CompleteNameType setLastName(string $lastName)
 * @method string getSuffix()
 * @method CompleteNameType setSuffix(string $suffix)
 * @method string getInitials()
 * @method CompleteNameType setInitials(string $initials)
 * @method string getFullName()
 * @method CompleteNameType setFullName(string $fullName)
 * @method string getNickname()
 * @method CompleteNameType setNickname(string $nickname)
 * @method string getYomiFirstName()
 * @method CompleteNameType setYomiFirstName(string $yomiFirstName)
 * @method string getYomiLastName()
 * @method CompleteNameType setYomiLastName(string $yomiLastName)
 */
class CompleteNameType extends Type
{

    /**
     * @var string
     */
    protected $title = null;

    /**
     * @var string
     */
    protected $firstName = null;

    /**
     * @var string
     */
    protected $middleName = null;

    /**
     * @var string
     */
    protected $lastName = null;

    /**
     * @var string
     */
    protected $suffix = null;

    /**
     * @var string
     */
    protected $initials = null;

    /**
     * @var string
     */
    protected $fullName = null;

    /**
     * @var string
     */
    protected $nickname = null;

    /**
     * @var string
     */
    protected $yomiFirstName = null;

    /**
     * @var string
     */
    protected $yomiLastName = null;
}
