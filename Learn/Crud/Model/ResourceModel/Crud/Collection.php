<?php
namespace Learn\Crud\Model\ResourceModel\Crud;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Learn\Crud\Model\Crud', 'Learn\Crud\Model\ResourceModel\Crud');
    }
}
