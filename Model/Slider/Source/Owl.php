<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\ProductSliderWidget\Model\Slider\Source;

use MageKey\ProductSliderWidget\Model\Slider\SourceAbstract;

class Owl extends SourceAbstract
{
    /**
     * @inheritdoc
     */
    public function remap(array $options)
    {
        $data = parent::remap($options);
        switch ($options['mode']) {
            case 'vertical':
                $data = array_merge($data, [
                    'items' => 1,
                    'slideBy' => 1,
                    'animateOut' => 'slideOutUp',
                    'animateIn' => 'slideInUp',
                ]);
                break;
            case 'fade':
                $data = array_merge($data, [
                    'items' => 1,
                    'slideBy' => 1,
                    'animateOut' => 'fadeOut'
                ]);
                break;
            default:
                break;
        }
        
        return $data;
    }

    /**
     * @inheritdoc
     */
    protected function getMapFields()
    {
        return [
            'items' => 'slides',
            'slideBy' => 'slides_move',
            'navSpeed' => 'speed',
            'loop' => 'loop',
            'autoplay' => 'auto',
            'autoplayTimeout' => 'auto_interval',
            'autoplaySpeed' => 'speed',
            'nav' => 'arrows',
            'dots' => 'dots',
            'mouseDrag' => 'draggable',
        ];
    }
}
