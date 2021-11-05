<?php
namespace Learn\Crud\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Crud extends AbstractDb
{
protected function _construct()
{
$this->_init('crud', 'id');
}
}
