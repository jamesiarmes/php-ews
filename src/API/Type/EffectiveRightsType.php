<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing EffectiveRightsType
 *
 *
 * XSD Type: EffectiveRightsType
 *
 * @method boolean isCreateAssociated()
 * @method boolean getCreateAssociated()
 * @method EffectiveRightsType setCreateAssociated(boolean $createAssociated)
 * @method boolean isCreateContents()
 * @method boolean getCreateContents()
 * @method EffectiveRightsType setCreateContents(boolean $createContents)
 * @method boolean isCreateHierarchy()
 * @method boolean getCreateHierarchy()
 * @method EffectiveRightsType setCreateHierarchy(boolean $createHierarchy)
 * @method boolean isDelete()
 * @method boolean getDelete()
 * @method EffectiveRightsType setDelete(boolean $delete)
 * @method boolean isModify()
 * @method boolean getModify()
 * @method EffectiveRightsType setModify(boolean $modify)
 * @method boolean isRead()
 * @method boolean getRead()
 * @method EffectiveRightsType setRead(boolean $read)
 * @method boolean isViewPrivateItems()
 * @method boolean getViewPrivateItems()
 * @method EffectiveRightsType setViewPrivateItems(boolean $viewPrivateItems)
 */
class EffectiveRightsType extends Type
{

    /**
     * @var boolean
     */
    protected $createAssociated = null;

    /**
     * @var boolean
     */
    protected $createContents = null;

    /**
     * @var boolean
     */
    protected $createHierarchy = null;

    /**
     * @var boolean
     */
    protected $delete = null;

    /**
     * @var boolean
     */
    protected $modify = null;

    /**
     * @var boolean
     */
    protected $read = null;

    /**
     * @var boolean
     */
    protected $viewPrivateItems = null;
}
