<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ItemIdType
 *
 * Identifier for a fully resolved item
 * XSD Type: ItemIdType
 *
 * @method string getId()
 * @method ItemIdType setId(string $id)
 * @method string getChangeKey()
 * @method ItemIdType setChangeKey(string $changeKey)
 */
class ItemIdType extends BaseItemIdType
{

    public function __construct($id, $changeKey)
    {
        $this->id = $id;
        $this->changeKey = $changeKey;
    }

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $changeKey = null;

    public function toArray()
    {
        return ['Id' => $this->id, 'ChangeKey' => $this->changeKey ];
    }
}
