<?php

namespace Genmato\ByteTraining\Model;

use Magento\Framework\Model\AbstractModel;

class Training extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Genmato\ByteTraining\Model\ResourceModel\Training');
    }
}