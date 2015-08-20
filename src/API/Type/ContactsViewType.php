<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ContactsViewType
 *
 *
 * XSD Type: ContactsViewType
 *
 * @method ContactsViewType getInitialName()
 * @method ContactsViewType setInitialName(string $initialName)
 * @method ContactsViewType getFinalName()
 * @method ContactsViewType setFinalName(string $finalName)
 */
class ContactsViewType extends BasePagingType
{

    /**
     * @property string $initialName
     */
    protected $initialName = null;

    /**
     * @property string $finalName
     */
    protected $finalName = null;
}
