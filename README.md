# Email queue checker to verify that your Laravel email queue is running

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adaptivemedia/email-queue-checker.svg?style=flat-square)](https://packagist.org/packages/adaptivemedia/email-queue-checker)
[![Build Status](https://img.shields.io/travis/adaptivemedia/email-queue-checker/master.svg?style=flat-square)](https://travis-ci.org/adaptivemedia/email-queue-checker)
[![Total Downloads](https://img.shields.io/packagist/dt/adaptivemedia/email-queue-checker.svg?style=flat-square)](https://packagist.org/packages/adaptivemedia/email-queue-checker)

In many projects there's an email queue that is responsible for sending emails. To make sure that the email queue is running, this package will add an email to the queue so it will be sent to a central system that receives the email and confirms that the queue is up and running.

## Installation

You can install the package via composer:

```bash
composer require adaptivemedia/email-queue-checker
```

## Usage

Add the service provider
```php
// config/app.php

'providers' => [
    // ...
    Adaptivemedia\EmailQueueChecker\EmailQueueCheckerServiceProvider::class,
];
``` 
Add console command to Kernel
```php
// app/Console/Kernel.php

protected $commands = [
    \Adaptivemedia\EmailQueueChecker\AddEmailQueueCheckerEmailCommand::class
];
``` 

Add a scheduling event to the command (included)
```php
// app/Console/Kernel.php

protected function schedule(Schedule $schedule)
{
    $schedule->command('email-queue-checker:add')->hourly();
}
``` 

Setup endpoint to parse incoming mail in Mandrill

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@adaptivemedia.be instead of using the issue tracker.

## Credits

- [Adaptivemedia](https://github.com/adaptivemedia)
- [All Contributors](../../contributors)

## About Adaptivemedia

Adaptivemedia is a web development agency based in Stockholm, Sweden. Check out our website at [here](https://adaptivemedia.se).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
