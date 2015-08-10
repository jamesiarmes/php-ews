<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SmtpDomainType
 *
 *
 * XSD Type: SmtpDomain
 *
 * @method SmtpDomainType getName()
 * @method SmtpDomainType setName($name)
 * @method SmtpDomainType getIncludeSubdomains()
 * @method SmtpDomainType setIncludeSubdomains($includeSubdomains)
 */
class SmtpDomainType extends Type
{

    /**
     * @property string $name
     */
    protected $name = null;

    /**
     * @property boolean $includeSubdomains
     */
    protected $includeSubdomains = null;


}

