## Caution
[[DEPRECATED]] This repository is no longer maintained.
We'll delete this repository & unpublish package at 2017/12/31.

# php-view-strategies
[![CircleCI](https://circleci.com/gh/Leko/php-view-strategies/tree/master.svg?style=svg)](https://circleci.com/gh/Leko/php-view-strategies/tree/master)
[![codecov](https://codecov.io/gh/Leko/php-view-strategies/branch/master/graph/badge.svg)](https://codecov.io/gh/Leko/php-view-strategies)
[![Latest Stable Version](https://poser.pugx.org/rush/view-strategies/v/stable)](https://packagist.org/packages/rush/view-strategies)
[![License](https://poser.pugx.org/rush/view-strategies/license)](https://packagist.org/packages/rush/view-strategies)

Multi template engine driver for PHP

## Installation
```
composer require rush/view-strategies
```

## Getting started
```php
<?php

use Rush\View;

View::configure([
    'base_path' => '/path/to/view',
    'default_extension' => 'php',
    'strategies' => [
        'php' => 'View\\Strategy\\Plate',
        'jade' => 'View\\Strategy\\Jade',
    ],
]);

echo new View('index.php')->render([ 'name' => 'John', 'age' => 30 ]);
echo new View('relative/path/to/view.jade')->render();
```

See [more example](https://github.com/Leko/php-view-strategies/blob/master/example)

## Testing
```
composer test
```

## License
The MIT License (MIT). Please see [License File](https://github.com/Leko/php-view-strategies/blob/master/LICENSE) for more information.
