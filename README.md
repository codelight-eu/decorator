# WordPress Decorator
A useful library for accessing WordPress's class methods

## Installation

```bash
$ composer require codelight/wp-decorator dev-main
```

## Quick Start
```php
use Codelight\WordPressDecorator\WooCommerce\CustomerDecorator;

try {

    $customer          = new WC_Customer(1);
    $customerDecorator = new CustomerDecorator($customer);

    print sprintf('ID: %s', $customerDecorator->getId());
    print sprintf('Email: %s', $customerDecorator->getEmail());

} catch (Exception $e) {
    print $e->getMessage();
}
```

You may interested to extend the class and putting your methods as well.

```php
use Codelight\WordPressDecorator\WooCommerce\CustomerDecorator;

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

} catch (Exception $e) {
    print $e->getMessage();
}
```

## Decorators
Here are the list of supported classes.

### WordPress

#### Post
```php
use Codelight\WordPressDecorator\WordPress\PostDecorator;
$postDecorator = new postDecorator(get_post(1));
```

#### User
```php
use Codelight\WordPressDecorator\WordPress\UserDecorator;
$userDecorator = new UserDecorator(get_user_by('id', 1));
```

#### Comment
soon...

### WooCommerce

#### Customer
```php
use Codelight\WordPressDecorator\WooCommerce\CustomerDecorator;
$customerDecorator = new CustomerDecorator(new \WC_Customer(1));
```

#### Order
```php
use Codelight\WordPressDecorator\WooCommerce\OrderDecorator;
$orderDecorator = new OrderDecorator(wc_get_order(1));
```

#### Product
```php
use Codelight\WordPressDecorator\WooCommerce\ProductDecorator;
$productDecorator = new ProductDecorator(wc_get_product(1));
```

## License

The MIT License (MIT). Please see [License File](https://github.com/thephpleague/container/blob/master/LICENSE.md) for more information.
