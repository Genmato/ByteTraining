<?php

namespace Genmato\ByteTraining\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container as GridContainer;

class Listing extends GridContainer
{
    protected function _construct()
    {
        $this->_controller = 'listing';
        $this->_headerText = __('Genmato Training');
        $this->_addButtonLabel = __('Add Training');

        parent::_construct();
    }
}