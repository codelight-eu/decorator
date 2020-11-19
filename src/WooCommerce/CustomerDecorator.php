<?php

namespace Codelight\WordPressDecorator\WooCommerce;

use Codelight\WordPressDecorator\DecoratorTrait;
use WC_Customer;

/**
 * Extends \WC_Customer with various custom functionality
 *
 * Class Customer Decorator
 *
 * @package Codelight\WordPressDecorator
 *
 * @method hasCalculatedShipping()
 * @method setToBase()
 * @method setShippingToBase()
 * @method isCustomerOutsideBase()
 * @method isCustomerOutsideBaseCountry($forTaxPurposes)
 * @method isPayingCustomer(mixed $userId)
 * @method isVatExempt()
 * @method getState()
 * @method getCountry()
 * @method getPostcode()
 * @method getCity()
 * @method getAddress()
 * @method getAddress2()
 * @method getShippingState()
 * @method getShippingCountry()
 * @method getShippingPostcode()
 * @method getShippingCity()
 * @method getShippingAddress()
 * @method getShippingAddress2()
 * @method getTaxableAddress()
 * @method setLocation(mixed $Country, mixed $State, string $postcode='', string $City='')
 * @method setCountry(mixed $country)
 * @method setState(mixed $state)
 * @method setPostcode(mixed $postcode)
 * @method setCity(mixed $city)
 * @method setAddress(mixed $address)
 * @method setAddress2(mixed $address2)
 * @method setShippingLocation(mixed $country, string $state = '', string $postcode = '', string $city = '')
 * @method setShippingCountry(mixed $country)
 * @method setShippingState(mixed $state)
 * @method setShippingPostcode(mixed $postcode)
 * @method setShippingCity(mixed $city)
 * @method setShippingAddress(mixed $address)
 * @method setShippingAddress2(mixed $address2)
 * @method setIsVatExempt(mixed $isVatExempt)
 * @method calculatedShipping(mixed $calculated = true)
 * @method getDownloadableProducts()
 */
class CustomerDecorator
{
    use DecoratorTrait;

    /**
     * Customer constructor.
     * @param WC_Customer $customer
     */
    public function __construct(WC_Customer $customer)
    {
        $this->object = $customer;
    }
}