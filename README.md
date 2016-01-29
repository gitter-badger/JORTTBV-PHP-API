# Jortt API client for PHP
PHP WEB API JSON for [Jortt B.V](https://jortt.nl)

## Requirements ##
To use the Jortt API client, the following things are required:

+ Visit website for free [Jortt account](https://app.jortt.nl/aanmelden/gratis)
+ Create a new [profile](https://app.jortt.nl/profile/api) to generate API keys
+ PHP >= 5.2
+ PHP cURL extension

## Getting started ##

```php
require_once('class.jorttbv.php'); 

$api = new JorttBV_API_Client;

$command = array(
	'invoice' => array(
		'customer_id'=> '',
		'delivery_period'=> '',
		'reference'=> '',
		'line_items' => array(
			'vat' => 21.00,
			'amount' => 0.00,
			'quantity' => 1,
			'description' => ''
		)
	)
);

$api->request($command, 'invoices');
```

## API documentation ##
If you wish to learn more about our API, please visit the [API Documentation](https://app.jortt.nl/api-documentatie).

## License ##

[BSD (Berkeley Software Distribution) License](https://opensource.org/licenses/bsd-license.php). Copyright (c) 2016, Extreemhost.

## Support ##
 Contact: [www.extreemhost.nl](https://extreemhost.nl) — info@extreemhost — +31 316-23 40 40