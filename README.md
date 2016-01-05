# ElasticSearch-php 2 Facade

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

Facade for [elasticsearch-php2](https://www.elastic.co/guide/en/elasticsearch/client/php-api/2.0/index.html)

## Install

Require this package with Composer (Packagist), using the following command:

``` bash
$ composer require media24si/eswrapper
```

Register the ESWrapperServiceProvider to the providers array in `config/app.php`

``` php
Media24si\ESWrapper\ESWrapperServiceProvider::class,
```

Publish vendor files (config file):
``` bash
$ php artisan vendor:publish
```

**Optional**
Register the facade in `config/app.php`:
``` php
'Elastic' => Media24si\ESWrapper\Facades\ESWrapper::class
```

## Usage

You can use this package without any configuration. Just use the \Elastic facade in your controller.

Call your endpoints, like you would a normal elasticsearch client:
``` php
\Elastic::get([
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id'
]);
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[manual]: http://guzzle.readthedocs.org/en/latest/
