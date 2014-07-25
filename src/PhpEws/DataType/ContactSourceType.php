<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ContactSourceType type
 */
class ContactSourceType extends DataType
{
    /**
     * Contact is stored in Active Directory.
     *
     * @var string
     */
    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    /**
     * Contact is stored in the Exchange Store.
     *
     * @var string
     */
    const EXCHANGE_STORE = 'Store';
}
