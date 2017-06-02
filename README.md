# Email queue checker to verify that your Laravel email queue is running

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adaptivemedia/email-queue-checker.svg?style=flat-square)](https://packagist.org/packages/adaptivemedia/email-queue-checker)
[![Build Status](https://img.shields.io/travis/adaptivemedia/email-queue-checker/master.svg?style=flat-square)](https://travis-ci.org/adaptivemedia/email-queue-checker)
[![Quality Score](https://img.shields.io/scrutinizer/g/adaptivemedia/email-queue-checker.svg?style=flat-square)](https://scrutinizer-ci.com/g/adaptivemedia/email-queue-checker)
[![Total Downloads](https://img.shields.io/packagist/dt/adaptivemedia/email-queue-checker.svg?style=flat-square)](https://packagist.org/packages/adaptivemedia/email-queue-checker)

This package will add functionality to add an email to the projects email queue to be able to verify that the queue is running correctly.

## Installation

You can install the package via composer:

```bash
composer require adaptivemedia/email-queue-checker
```

## Usage
- Add the service provider
- Add a scheduling event to the command (included)
- Setup endpoint to parse incoming mail in Mandrill

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
