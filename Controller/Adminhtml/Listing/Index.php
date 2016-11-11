<?php

namespace Genmato\ByteTraining\Controller\Adminhtml\Listing;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action as BackendAction;

class Index extends BackendAction
{

    /**
     * @var \Genmato\ByteTraining\Controller\Adminhtml\\PageFactory
     */
    protected $resultPageFactory;
    /**
     * Index constructor.
     * @param \Genmato\ByteTraining\Controller\Adminhtml\\Context $context
     * @param \Genmato\ByteTraining\Controller\Adminhtml\\PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
}