<?php

use Codelight\WordPressDecorator\WooCommerce\CustomerDecorator;

include '../config.php';

try {

    $customer          = new WC_Customer(1);
    $customerDecorator = new CustomerDecorator($customer);

    print sprintf('ID: %s', $customerDecorator->getId());
    print sprintf('Email: %s', $customerDecorator->getEmail());
    die();

} catch (Exception $e) {
    print $e->getMessage();
    die();
}
