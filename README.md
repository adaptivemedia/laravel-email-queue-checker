# Email queue checker for Laravel projects to verify that your email queue is running

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adaptivemedia/laravel-email-queue-checker.svg?style=flat-square)](https://packagist.org/packages/adaptivemedia/laravel-email-queue-checker)
[![Build Status](https://img.shields.io/travis/adaptivemedia/laravel-email-queue-checker/master.svg?style=flat-square)](https://travis-ci.org/adaptivemedia/laravel-email-queue-checker)
[![Total Downloads](https://img.shields.io/packagist/dt/adaptivemedia/laravel-email-queue-checker.svg?style=flat-square)](https://packagist.org/packages/adaptivemedia/laravel-email-queue-checker)

In many projects there's an email queue that is responsible for sending emails. To make sure that the email queue is running, this package will add an email to the queue so it will be sent to a central system that receives the email and confirms that the queue is up and running. This package is optimized for Laravel, but can work with any PHP project.

## Installation

You can install the package via composer:

```bash
composer require adaptivemedia/laravel-email-queue-checker
```

## Usage 

#### Add the service provider
```php
// config/app.php

'providers' => [
    // ...
    Adaptivemedia\EmailQueueChecker\EmailQueueCheckerServiceProvider::class,
];
```

If you're on Laravel 5.5, this package will be registered automatically via Laravels [Package Discovery](https://laravel.com/docs/5.5/packages#package-discovery)

#### Add console command to Kernel
```php
// app/Console/Kernel.php

protected $commands = [
    \Adaptivemedia\EmailQueueChecker\AddEmailQueueCheckerEmailCommand::class
];
``` 

#### Add a scheduling event to the command
```php
// app/Console/Kernel.php

protected function schedule(Schedule $schedule)
{
    $schedule->command('email-queue-checker:add-email')->hourly();
}
``` 

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email info@adaptivemedia.se instead of using the issue tracker.

## Credits

- [Adaptivemedia](https://github.com/adaptivemedia)
- [All Contributors](../../contributors)

## About Adaptivemedia

Adaptivemedia is a web development agency based in Stockholm, Sweden. Check out our website at [here](https://adaptivemedia.se).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
