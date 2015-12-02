PhpMandrill: a PHP library to handle webooks of Mandrill
==============================================================

Introduction
------------

This library can handle the webhooks send by [Mandrill](https://mandrill.com)
### Features

This library’s features include the following.

* Parse send events

Installation
------------

The recommended way to install this library is through [Composer](http://getcomposer.org):

```bash
$ php composer.phar require wpeereboom/php-mandrill dev-master
```

Usage
-----

### The client

Use the client to get the call data. First construct a client and call the methods to receive the data:

```php
$parser = new Parser($rawEventMessage);

// To get the event
$event = $parser->parse();
```
