<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\ProductSliderWidget\Model\Slider;

abstract class SourceAbstract
{
    /**
     * Remap slider options
     *
     * @param array $options
     * @return array
     */
    public function remap(array $options)
    {
        $data = [];
        foreach ($this->getMapFields() as $sliderConfig => $widgetConfig) {
            $val = isset($options[$widgetConfig]) ? $options[$widgetConfig] : null;
            $data[$sliderConfig] = is_numeric($val) ? (float)$val : $val;
        }
        
        return $data;
    }

    /**
     * Get map fields
     *
     * @return array
     */
    abstract protected function getMapFields();
}
