<?php
/**
 * Ak  Availability
 * This module is displaying  product availability in catalog .
 * @category    Ak
 * @package     Ak_Availability
 */

/**
 * Ak  Availability
 *
 * @category   Ak
 * @package    Ak_Availability
 * @author     Adesh Kumar <adeshsuryan2005@gmail.com>
 */
 
class Ak_Availability_Block_Catalog_Product extends Mage_Core_Block_Template
{
    protected $_product;
	
	public function __construct()
	 {
		$this->addData(array(
		'cache_lifetime' => null,       
	   ));
	 }

    public function setProduct($product)
    {
        $this->_product = $product;

        return $this;
    }

    public function getProduct()
    {
        if (!$this->_product) {
            $this->_product = Mage::registry('product');
        }

        return $this->_product;
    }

    public function isStocksAvailable()
    {
        $enabled = Mage::getStoreConfig('availability/availability_label/enabled');
        if (!$enabled) {
            return false;
        }

        $product = $this->getProduct();
        if ($product->isAvailable()) {
            return true;
        }

        return false;
    }

    public function getInStockText()
    {
        $text = Mage::getStoreConfig('availability/availability_label/instock_text');

        return $text;
    }
	public function getOutStockText()
    {
        $text = Mage::getStoreConfig('availability/availability_label/outstock_text');

        return $text;
    }

    public function getInBackgroundColor()
    {
        $backgroundColor = "#" . Mage::getStoreConfig('availability/availability_label/in_background_color');

        return $backgroundColor;
    }
	 public function getOutBackgroundColor()
    {
        $backgroundColor = "#" . Mage::getStoreConfig('availability/availability_label/out_background_color');

        return $backgroundColor;
    }

    public function getInTextColor()
    {
        $textColor = "#" . Mage::getStoreConfig('availability/availability_label/in_text_color');

        return $textColor;
    }
    public function getOutTextColor()
    {
        $textColor = "#" . Mage::getStoreConfig('availability/availability_label/out_text_color');

        return $textColor;
    }

    public function getLocationClass()
    {
        $location = Mage::getStoreConfig('availability/general/location');
        switch ($location) {
            case 10: 
                $locationClass = "pl-top-left";
                break;
            case 20: 
                $locationClass = "pl-top-right";
                break;
            case 30: 
                $locationClass = "pl-bottom-left";
                break;
            case 40: 
                $locationClass = "pl-bottom-right";
                break;
            default: 
                $locationClass = "";
                break;
        }

        return $locationClass;
    }
} 