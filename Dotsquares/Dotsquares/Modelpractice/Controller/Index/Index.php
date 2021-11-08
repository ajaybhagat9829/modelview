<?php

namespace Dotsquares\Modelpractice\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Dotsquares\Modelpractice\Model\Hero;
use Dotsquares\Modelpractice\Model\ResourceModel\Hero as HeroResource;

class Index extends Action
{
 /**
     * @var Hero
     */
    private $hero;
    /**
     * @var HeroResource
     */
    private $heroResource;

    /**
     * Add constructor.
     * @param Context $context
     * @param Hero $hero
     * @param HeroResource $heroResource
     */
    public function __construct(
        Context $context,
        Hero $hero,
        HeroResource $heroResource
    )
    {
        parent::__construct($context);
        $this->hero = $hero;
        $this->heroResource = $heroResource;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */

     public function execute()
    {
          /* Get the post data */
        $data = $this->getRequest()->getParams();
       
//
//        /* Set the data in the model */
        $carModel = $this->hero;
        $carModel->setData($data);
//
        try {
            /* Use the resource model to save the model in the DB */
            $this->heroResource->save($carModel);
            $this->messageManager->addSuccessMessage("Car saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving car"));
        }
//
//        /* Redirect back to cars page */
//        $redirect = $this->resultRedirectFactory->create();
        //$redirect->setPath('modelpractice/index/index');
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
        //return $redirect;
        
        
    }
}