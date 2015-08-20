<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SmtpDomainType
 *
 *
 * XSD Type: SmtpDomain
 *
 * @method string getName()
 * @method SmtpDomainType setName(string $name)
 * @method boolean getIncludeSubdomains()
 * @method SmtpDomainType setIncludeSubdomains(boolean $includeSubdomains)
 */
class SmtpDomainType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var boolean
     */
    protected $includeSubdomains = null;
}
