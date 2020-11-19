<?php

namespace Codelight\WordPressDecorator\WooCommerce;

use Codelight\WordPressDecorator\DecoratorTrait;
use WC_Order;

/**
 * Extends \WC_Order with various custom functionality
 *
 * Class Order Decorator
 *
 * @package Codelight\WordPressDecorator
 * @todo methods
 */
class OrderDecorator
{
    use DecoratorTrait;

    /**
     * OrderDecorator constructor.
     * @param WC_Order $order
     */
    public function __construct(WC_Order $order)
    {
        $this->object = $order;
    }
}