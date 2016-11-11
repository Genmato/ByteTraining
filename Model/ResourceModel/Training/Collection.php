<?php

namespace Genmato\ByteTraining\Model\ResourceModel\Training;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Genmato\ByteTraining\Model\Training', 'Genmato\Sample\Model\ResourceModel\Demo');
    }
}