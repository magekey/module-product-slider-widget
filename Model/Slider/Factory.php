<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\ProductSliderWidget\Model\Slider;

class Factory
{
    /**
     * @var SourceAbstract
     */
    protected $_instance;

    /**
     * @param SourceAbstract $instance
     */
    public function __construct(
        SourceAbstract $instance
    ) {
        $this->_instance = $instance;
    }

    /**
     * Get slider instance
     *
     * @return SourceAbstract
     */
    public function getInstance()
    {
        return $this->_instance;
    }
}
