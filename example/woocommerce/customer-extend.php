<?php

use Codelight\WordPressDecorator\WooCommerce\CustomerDecorator;

include '../config.php';

class MyCustomerDecoratorClass extends CustomerDecorator
{
    public function __construct(WC_Customer $customer)
    {
        parent::__construct($customer);
    }

    public function getAdminColor()
    {
        return $this->getMeta('admin_color');
    }
}

try {

    $customer          = new WC_Customer(1);
    $customerDecorator = new MyCustomerDecoratorClass($customer);

    print sprintf('Admin color: %s', $customerDecorator->getAdminColor());
    die();

} catch (Exception $e) {
    print $e->getMessage();
    die();
}
