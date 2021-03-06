<?php

namespace Codelight\WordPressDecorator\WooCommerce;

use Codelight\WordPressDecorator\DecoratorTrait;
use WC_Product;

/**
 * Extends \WC_Product with various custom functionality.
 *
 * Class ProductDecorator
 *
 * @package Codelight\WordPressDecorator\WooCommerce
 */
class ProductDecorator
{
    use DecoratorTrait;

    /**
     * ProductDecorator constructor.
     *
     * @param WC_Product $product
     */
    public function __construct(WC_Product $product)
    {
        $this->object = $product;
    }
}
