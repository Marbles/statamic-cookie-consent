# Make your website comply with the crazy EU cookie law

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/8597a693-6ee5-4db7-93af-fee15e325709.svg?style=flat-square)](https://insight.sensiolabs.com/projects/8597a693-6ee5-4db7-93af-fee15e325709)
[![Quality Score](https://img.shields.io/scrutinizer/g/marbles/statamic-cookie-consent.svg?style=flat-square)](https://scrutinizer-ci.com/g/marbles/statamic-cookie-consent)
[![StyleCI](https://styleci.io/repos/76270843/shield?branch=master)](https://styleci.io/repos/76270843)

![Screenshot](http://i.imgur.com/t9QYZwP.png)

## Installation

Download or clone the repository, rename the folder to `CookieConsent` then copy the folder to your site's `Addons` directory, then refresh the add-ons to install the dependencies.

``` bash
php please addons:refresh
```

## Usage

To use the Cookie Consent addon, you need to add 3 tags to your theme layout:  

Insert this tag before your own stylesheet, if you rather combine css, you can copy the css file from the CDN and combine it with your own stylesheet.
```html
    {{ cookie_consent:css }}
```

Insert this tag before your own scripts, if you rather combine js, you can copy the js file from the CDN and combine it with your own JavaScript files.
```html
    {{ cookie_consent:js }}
```

Insert this tag before your own scripts, this initializes the Cookie Consent plug-in with the values you chose.
```html
    {{ cookie_consent }}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email rias@marbles.be instead of using the issue tracker.

## Credits

- [Rias Van der Veken](https://github.com/rias500)
- [All Contributors](../../contributors)

## About Marbles
Marbles is a digital communication agency based in Antwerp, Belgium. Learn more about us [on our website](https://www.marbles.be).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
