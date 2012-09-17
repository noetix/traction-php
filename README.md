# About

[Traction][1] is a relationship marketing platform that makes it easy to manage multi-channel campaigns and build brand advocacy through the effective use of data.

This is a PHP implementation of their API.

* PHP 5.3+ Library
* Curl Transport (via [Buzz][2])

# Example

```php
<?php

use Traction\Request\Type\Customer;
use Traction\Request\Promotion;
use Traction\Handler;

// use the customer class to structure your customer information
$customer = new Customer;
$customer->setEmailOpt(Customer::OPT_IN);
$customer->setFirstName('John');
$customer->setLastName('Smith');
$customer->setEmail('john@example.com');

// create a promotion request
$promo = new Promotion;
$promo->setPromotionId(12345);
$promo->setMatchKey(Promotion::MATCHKEY_EMAIL);
$promo->setMatchValue('john@example.com');
$promo->setCustomer($customer);
$promo->addCustomAttribute('123456', 'here is a custom field');
$promo->addSnippet('use array fields');
$promo->addSnippet('as arrays!');

// create an instance of the request handler
$handler = new Handler(array(
    'endpoint_id' => '12345',
    'user_id'     => 'foo',
    'password'    => 'bar'
    ));

// send it
$response = $handler->submit($promo);
```

[1]: http://traction-digital.com
[2]: https://github.com/kriswallsmith/Buzz