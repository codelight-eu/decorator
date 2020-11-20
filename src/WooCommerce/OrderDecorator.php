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
 *
 * @method getOrderNumber()
 * @method getFormattedBillingAddress()
 * @method getBillingAddress()
 * @method getFormattedShippingAddress()
 * @method getShippingAddress()
 * @method getItems(string | array $Type = '')
 * @method getItemCount(mixed $type = '')
 * @method getFees()
 * @method getTaxes()
 * @method getShippingMethods()
 * @method hasShippingMethods(string $methodId)
 * @method getTaxTotals()
 * @method hasMeta(string $orderItemId)
 * @method getItemMeta(mixed $orderItemId, string $key = '', boolean $single = false)
 * @method getCartDiscount()
 * @method getOrderDiscount()
 * @method getTotalDiscount()
 * @method getCartTax()
 * @method getShippingTax()
 * @method getTotalTax()
 * @method getTotalShipping()
 * @method getTotal()
 * @method getItemSubtotal(mixed $item, boolean $incTax = false, boolean $round = true)
 * @method getLineSubtotal(mixed $item, boolean $incTax = false, boolean $round = true)
 * @method getItemTotal(mixed $item, boolean $incTax = false, boolean $round = true)
 * @method getLineTotal(mixed $item, boolean $incTax = false)
 * @method getItemTax(mixed $item, boolean $round = true)
 * @method getLineTax(mixed $item)
 * @method getShippingMethod()
 * @method getFormattedLineSubtotal(array $Item, string $taxDisplay = '')
 * @method getOrderCurrency()
 * @method getFormattedOrderTotal()
 * @method getSubtotalToDisplay(boolean $Compound = false, string $taxDisplay = '')
 * @method getShippingToDisplay(mixed $taxDisplay = '')
 * @method getCartDiscountToDisplay()
 * @method getOrderDiscountToDisplay()
 * @method getProductFromItem(mixed $item)
 * @method getOrderItemTotals(mixed $taxDisplay = '')
 * @method emailOrderItemsTable(boolean $showDownloadLinks = false, boolean $showSku = false, boolean $showPurchaseNote = false, $isDownloadPermitted)
 * @method hasDownloadableItem()
 * @method getCheckoutPaymentUrl(boolean $OnCheckout = false)
 * @method getCheckoutOrderReceivedUrl()
 * @method getCancelOrderUrl(mixed $redirect = '')
 * @method getViewOrderUrl()
 * @method getItemDownloads(array $Item)
 * @method getDownloadUrl(integer $ProductId, integer $downloadId)
 * @method addOrderNote(string $note, integer $isCustomerNote = 0)
 * @method updateStatus(string $newStatusSlug, string $note = '')
 * @method cancelOrder(string $note = '')
 * @method paymentComplete()
 * @method recordProductSales()
 * @method getUsedCoupons()
 * @method increaseCouponUsageCounts()
 * @method decreaseCouponUsageCounts()
 * @method reduceOrderStock()
 * @method sendStockNotifications(object $Product, integer $newStock, integer $qtyOrdered)
 * @method getCustomerOrderNotes()
 * @method needsPayment()
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