<?php

namespace Learn\Crud\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\Template;
use Learn\Crud\Model\CrudFactory;

class Form extends Template
{
    private $crudFactory;

    public function __construct(CrudFactory $crudFactory, Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->crudFactory = $crudFactory;
    }

    public function getFormAction()
    {
        return $this->getUrl('crud/index/submit', ['_secure' => true]);
    }

    public function getAllData()
    {
        $id = $this->getRequest()->getParam("id");
        $model = $this->crudFactory->create();
        return $model->load($id);
    }
}
