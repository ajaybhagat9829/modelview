<?php

namespace Dotsquares\Modelpractice\Block\Index;

use Dotsquares\Modelpractice\Model\ResourceModel\Hero\Collection;

class Index extends \Magento\Framework\View\Element\Template {

    /**
     * @var Collection
     */
    private $collection;

    /**
     * Hello constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(\Magento\Catalog\Block\Product\Context $context, array $data = [], Collection $collection) {

        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllCars() {
        return $this->collection;
    }

    protected function _prepareLayout() {
        return parent::_prepareLayout();
    }

}
