<?php
namespace Learn\Crud\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Crud extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Learn\Crud\Model\ResourceModel\Crud');
    }
}
