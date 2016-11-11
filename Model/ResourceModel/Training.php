<?php

namespace Genmato\ByteTraining\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Training extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('genmato_training', 'training_id');
    }
}