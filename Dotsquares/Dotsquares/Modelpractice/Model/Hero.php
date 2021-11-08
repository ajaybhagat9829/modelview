<?php

namespace Dotsquares\Modelpractice\Model;

use Magento\Framework\Model\AbstractModel;
use Dotsquares\Modelpractice\Model\ResourceModel\Hero as ResourceModel;

class Hero extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}