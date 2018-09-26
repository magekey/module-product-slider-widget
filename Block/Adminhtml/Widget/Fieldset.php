<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\ProductSliderWidget\Block\Adminhtml\Widget;

class Fieldset extends \Magento\Backend\Block\Template
{
    /**
     * Prepare chooser element HTML
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element Form Element
     * @return \Magento\Framework\Data\Form\Element\AbstractElement
     */
    public function prepareElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $label = '<h2><strong>' . $this->getConfig('label') . '</strong></h2>';
        $element->setData('after_element_html', $label);

        return $element;
    }
}
