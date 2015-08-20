<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ContactsViewType
 *
 *
 * XSD Type: ContactsViewType
 *
 * @method string getInitialName()
 * @method ContactsViewType setInitialName(string $initialName)
 * @method string getFinalName()
 * @method ContactsViewType setFinalName(string $finalName)
 */
class ContactsViewType extends BasePagingType
{

    /**
     * @var string
     */
    protected $initialName = null;

    /**
     * @var string
     */
    protected $finalName = null;
}
