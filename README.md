
# Dynadot PHP

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Dynadot PHP is a Package that use the Dynadot API. All functions at this time are implemted and can be used.


## Install

Via Composer

``` bash
$ composer require wirecore/dynadot-php
```

## Usage

``` php
use Wirecore\Dynadot\DynadotApi;

$test = new DynadotApi("ApiKey");
$result = $test->search(array('show_price' => 1,'domain0' => 'google.de'));
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email info@red-crown.de instead of using the issue tracker.

## Credits

- [Florian Laabs][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/wirecore/dynadot-php.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/wirecore/dynadot-php.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/wirecore/dynadot-php
[link-downloads]: https://packagist.org/packages/wirecore/dynadot-php
[link-author]: https://github.com/wiifree
[link-contributors]: ../../contributors
