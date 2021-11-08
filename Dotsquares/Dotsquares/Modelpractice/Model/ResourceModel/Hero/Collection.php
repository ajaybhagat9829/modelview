<?php
namespace Dotsquares\Modelpractice\Model\ResourceModel\Hero;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Dotsquares\Modelpractice\Model\Hero as Model;
use Dotsquares\Modelpractice\Model\ResourceModel\Hero as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}