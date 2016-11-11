<?php

namespace Genmato\ByteTraining\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Training extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('genmato_training', 'training_id');
    }

    protected function _beforeSave(\Magento\Framework\Model\AbstractModel $object)
    {
        if (!$object->getId()) {
            $object->setCreatedAt(time());
        }
        return parent::_beforeSave($object);
    }
}