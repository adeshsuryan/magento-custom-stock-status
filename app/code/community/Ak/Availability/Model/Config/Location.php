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
 
class Ak_Availability_Model_Config_Location
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 10, 'label'=>Mage::helper('availability')->__('Top-left')),
            array('value' => 20, 'label'=>Mage::helper('availability')->__('Top-right')),
            array('value' => 30, 'label'=>Mage::helper('availability')->__('Bottom-left')),
            array('value' => 40, 'label'=>Mage::helper('availability')->__('Bottom-right')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            10 => Mage::helper('availability')->__('Top-left'),
            20 => Mage::helper('availability')->__('Top-right'),
            30 => Mage::helper('availability')->__('Bottom-left'),
            40 => Mage::helper('availability')->__('Bottom-right'),
        );
    }

}