# Magento 2 Product Slider Widget

[![Packagist](https://img.shields.io/packagist/v/magekey/module-product-slider-widget.svg)](https://packagist.org/packages/magekey/module-product-slider-widget) [![Packagist](https://img.shields.io/packagist/dt/magekey/module-product-slider-widget.svg)](https://packagist.org/packages/magekey/module-product-slider-widget)

## Features:

- "Catalog Products Slider" Widget

## Installing the Extension

    composer require magekey/module-product-slider-widget

## Deployment

    php bin/magento maintenance:enable                  #Enable maintenance mode
    php bin/magento setup:upgrade                       #Updates the Magento software
    php bin/magento setup:di:compile                    #Compile dependencies
    php bin/magento setup:static-content:deploy         #Deploys static view files
    php bin/magento cache:flush                         #Flush cache
    php bin/magento maintenance:disable                 #Disable maintenance mode

## Versions tested
> 2.2.6
