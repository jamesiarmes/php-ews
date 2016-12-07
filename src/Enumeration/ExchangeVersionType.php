<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ExchangeVersionType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the versioning information that identifies the schema version to
 * target for a request.
 *
 * @package php-ews\Enumeration
 */
class ExchangeVersionType extends Enumeration
{
    /**
     * Target the schema files for the initial release version of Exchange 2007.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const EXCHANGE_2007 = 'Exchange2007';

    /**
     * Target the schema files for Exchange 2007 Service Pack 1 (SP1), Exchange
     * 2007 Service Pack 2 (SP2), and Exchange 2007 Service Pack 3 (SP3).
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const EXCHANGE_2007_SP1 = 'Exchange2007_SP1';

    /**
     * Microsoft Exchange 2007 SP2
     *
     * @var string
     */
    const VERSION_2009 = 'Exchange2009';

    /**
     * Target the schema files for Exchange 2010.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCHANGE_2010 = 'Exchange2010';

    /**
     * Target the schema files for Exchange 2010 Service Pack 1 (SP1).
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    const EXCHANGE_2010_SP1 = 'Exchange2010_SP1';

    /**
     * Target the schema files for Exchange 2010 Service Pack 2 (SP2) and
     * Exchange 2010 Service Pack 3 (SP3).
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const EXCHANGE_2010_SP2 = 'Exchange2010_SP2';

    /**
     * Target the schema files for Exchange 2013.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const EXCHANGE_2013 = 'Exchange2013';

    /**
     * Target the schema files for Exchange 2013 Service Pack 1 (SP1).
     *
     * @since Exchange 2013 SP1
     *
     * @var string
     */
    const EXCHANGE_2013_SP1 = 'Exchange2013_SP1';

    /**
     * Target the schema files for Exchange 2016.
     *
     * @since Exchange 2016
     *
     * @var string
     */
    const VERSION_2016 = 'Exchange2016';
}
