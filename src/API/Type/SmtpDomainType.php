<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SmtpDomainType
 *
 *
 * XSD Type: SmtpDomain
 *
 * @method SmtpDomainType getName()
 * @method SmtpDomainType setName(string $name)
 * @method SmtpDomainType getIncludeSubdomains()
 * @method SmtpDomainType setIncludeSubdomains(boolean $includeSubdomains)
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
