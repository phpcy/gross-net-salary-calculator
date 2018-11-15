# gross-net-salary-calculator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require phpcy/gross-net-salary-calculator
```

## Usage

``` php
$calculator = new Phpcy\GrossNetSalaryCalculator\Calculator();
$result = $calculator->calculateNetSalary(1000, 12);
echo $result->getAnnualGrossSalary();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md).

## Security

If you discover any security related issues, please email phpcyprus@gmail.com instead of using the issue tracker.

## Credits

- [PHP Cyprus][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/phpcy/gross-net-salary-calculator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/phpcy/gross-net-salary-calculator/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/phpcy/gross-net-salary-calculator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/phpcy/gross-net-salary-calculator
[link-travis]: https://travis-ci.org/phpcy/gross-net-salary-calculator
[link-downloads]: https://packagist.org/packages/phpcy/gross-net-salary-calculator
[link-author]: https://github.com/phpcy
[link-contributors]: ../../contributors
