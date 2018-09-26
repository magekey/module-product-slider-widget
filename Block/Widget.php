<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\ProductSliderWidget\Block;

use Magento\Framework\App\ObjectManager;
use MageKey\ProductSliderWidget\Model\Slider\Factory as SliderFactory;
use MageKey\ProductSliderWidget\Model\Slider\SourceAbstract as SliderSourceAbstract;

class Widget extends \Magento\CatalogWidget\Block\Product\ProductsList
{
    /**
     * Slider prefix
     */
    const SLIDER_OPTION_PREFIX = 'slider';

    /**
     * @var SliderSourceAbstract
     */
    protected $_sliderInstance;

    /**
     * Prepare and return product collection
     *
     * @return \Magento\Catalog\Model\ResourceModel\Product\Collection
     */
    public function createCollection()
    {
        $collection = parent::createCollection();
        $collection->setCurPage(null);

        return $collection;
    }

    /**
     * Retrieve how many products should be displayed
     *
     * @return int
     */
    public function getProductsPerPage()
    {
        return 0;
    }

    /**
     * Return flag whether pager need to be shown or not
     *
     * @return bool
     */
    public function showPager()
    {
        return false;
    }

    /**
     * Get slider
     *
     * @return SliderSourceAbstract
     */
    public function getSliderInstance()
    {
        if (null === $this->_sliderInstance) {
            $this->_sliderInstance = ObjectManager::getInstance()
                ->get(SliderFactory::class)
                ->getInstance();
        }

        return $this->_sliderInstance;
    }

    /**
     * Get slider options
     *
     * @return \Magento\Framework\DataObject
     */
    public function getSliderOptions()
    {
        if (!$this->hasData('slider_options')) {
            $options = [];
            foreach ($this->getData() as $name => $value) {
                if (strpos($name, self::SLIDER_OPTION_PREFIX . '.') === 0) {
                    $options[str_replace(self::SLIDER_OPTION_PREFIX . '.', '', $name)] = $value;
                }
            }
            $options = $this->getSliderInstance()->remap($options);
            $options = new \Magento\Framework\DataObject($options);
            $this->setData('slider_options', $options);
        }
        return $this->getData('slider_options');
    }
}
