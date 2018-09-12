# Adding Collection functions to the PHP array scalar type

[![Latest Version on Packagist](https://img.shields.io/packagist/v/m1guelpf/native-collection.svg?style=flat-square)](https://packagist.org/packages/m1guelpf/native-collection)
[![Build Status](https://img.shields.io/travis/m1guelpf/native-collection/master.svg?style=flat-square)](https://travis-ci.org/m1guelpf/native-collection)
[![Quality Score](https://img.shields.io/scrutinizer/g/m1guelpf/native-collection.svg?style=flat-square)](https://scrutinizer-ci.com/g/m1guelpf/native-collection)
[![Total Downloads](https://img.shields.io/packagist/dt/m1guelpf/native-collection.svg?style=flat-square)](https://packagist.org/packages/m1guelpf/native-collection)

**WARNING: You'll need to install [this extension](https://github.com/nikic/scalar_objects) for this package to work**

## Installation

You can install the package via composer:

```bash
composer require m1guelpf/native-collection
```

## Usage

``` php
['never-gonna-give-you' => 'up', 'never-gonna-let-you' => 'down']->each(function($lyric) {
    play($lyric)
})->reverse(); // returns array
```

### PHP5
If you're using PHP5, you'll need to assign the array to a variable first:

``` php
$temporary = ['never-gonna-give-you' => 'up', 'never-gonna-let-you' => 'down']

$temporary->each(function($lyric) {
    play($lyric)
})->reverse(); // returns array
```

### Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email soy@miguelpiedrafita.com instead of using the issue tracker.

## Credits

- [Miguel Piedrafita](https://github.com/m1guelpf)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
