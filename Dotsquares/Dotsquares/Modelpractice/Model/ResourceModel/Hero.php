<?php

namespace Dotsquares\Modelpractice\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Hero extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('studentdata', 'id');
    }
}