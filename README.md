# moyasar package with moyasar.com
Moyasar Api Package With Laravel 5.0 => 5.3 and above ^ created by phpanonymous :)
## Installation
run this commad on your composer 
``` 
composer require moyasarphpanonymouscom/moyasarapi 
```

#attention please
this package based on  guzzlehttp version 6.2 
don't worry this package auto downloaded by Composer

#app.php preparing 
you maybe want add this on providers array to ``` config/app.php ```
```php
         Moyasarphpanonymouscom\MoyasarApi\MoyasarProvider::class,
```
add this on aliases array 
```php 
        'Moyasar'   => Moyasarphpanonymouscom\MoyasarApi\MoyasarFaced::class,
```
after save ```app.php``` 
run this command in your composer to make moyasar.php and move to config folder automatically
``` 
php artisan vendor:publish 
```

and you must be signup account with https://moyasar.com and generate new keys like this https://moyasar.com/docs/api/?php#authentication
you should update your config

```php 
return [
	 'Test_Secret_Key'=>'Add Your Secret Key  Here :)',
	 'Test_Publishable_Key'=>'Add Your Test Publishable Key Here',

	 'Live_Secret_Key'=>'Add Your Live Secret Key Here',
	 'Live_Publishable_Key'=>'Add Your Live Publishable Key Here ',
];

```
#usage
use this class to set api key with this method 
```php 
Moyasar::setApiKey(config('moyasar.Test_Secret_Key'));
```
if you want make a new invoices 
use this method
```php 
Moyasar::InvCreate('10000','pay me');
```
to query about invoice 
use this method 
```php
Moyasar::InvFetch("your id invoice ");
// this method get array like this if success paid https://moyasar.com/docs/api/?php#payments
// https://moyasar.com/docs/api/?php#invoices
// if can be the payments array not empty and source .. check message key is successed to check invoice paid or not 
```
to create new payment jus use this method on your site to input type credit card or visa like this 
```php 
// const class type
/*
Moyasar::CREDIT_CARD
Moyasar::CURRENCY
Moyasar::DESCRIPTION
Moyasar::SOURCE
Moyasar::SADAD
Moyasar::AMOUNT

*/
$card = [
 	    "type" => Moyasar::CREDIT_CARD,
	    "name" => "Abdulaziz Nasser",
	    "number" => "4111111111111111",
	    "cvc" => 331,
	    "month" => 12,
	    "year" => 2017
 	 	];
    //                        price   cardinfo  description   currency    
 	 return Moyasar::PayCreate("10000"  ,$card,  "bag payment", "SAR");
   // check status array to successed
```
to get all invoices 
use this method 
```php
// get all invoices paid 
return Moyasar::PayAll();

```

soon a simple video to usage it 
if you have any questions can ask me in this group in facebook 
https://www.facebook.com/groups/anonymouses.developers
enjoy :) 


