<?php
class HomeWork_DeliveryDate_Model_Observer
{

    public function saveDeliveryDate(Varien_Event_Observer $observer)
    {
        /* @var $request Mage_Core_Controller_Request_Http */
        $request = $observer->getEvent()->getRequest();
        /* @var $quote Mage_Sales_Model_Quote */
        $quote = $observer->getEvent()->getQuote();

        $date = $request->getParam('delivery_date', false);
        if ($date) {
            // TODO: validate
            $quote->setDeliveryDate($date);
        }

    }

}