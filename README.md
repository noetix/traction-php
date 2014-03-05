# About

[Traction][1] is a relationship marketing platform that makes it easy to manage multi-channel campaigns and build brand advocacy through the effective use of data.

This is a PHP implementation of their API.

* PHP 5.3+ Library
* Curl Transport (via [Buzz][2])

# Example

## Classic API

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

## Dynamic API

```php
use Traction\Request\Competition;
use Traction\DynamicHandler;

// Create Entry
$comp = new Competition();
$comp->addAttribute('EMAIL', $entry->getEmail());
$comp->addAttribute('FIRSTNAME', $entry->getFirstName());
$comp->addAttribute('LASTNAME', $entry->getSurname());
$comp->addAttribute('LNDM_DATE_OF_BIRTH', $entry->getDob()->format('d/m/Y'));
$comp->addAttribute('LNDM_PHONE_NUMBER', $entry->getMobile());
$comp->addAttribute('LNDM_ADDRESS_1', $entry->getStreet());
$comp->addAttribute('LNDM_STATE_NAME', $entry->getState());
$comp->addAttribute('LNDM_SUBURB', $entry->getSuburb());
$comp->addAttribute('LNDM_POSTCODE', $entry->getPostcode());
$comp->setSubscribe($entry->getOptin());

// create an instance of the request handler
$handler = new DynamicHandler(array(
    'connection' => 'd2342afexxxadfas23r',
    'password'    => 'bar'
));

// send it
$response = $traction->submit($comp);
return $response->getCustomerId();
```

[1]: http://traction-digital.com
[2]: https://github.com/kriswallsmith/Buzz
