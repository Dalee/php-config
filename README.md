# php-config

A set of php configurations for different cool utils such as `php-cs-fixer`.

```
$ composer require --dev dalee/php-config
```

## Usage

### php-cs-fixer

To make it work you have to create `.php_cs.dist` with `Dalee\CodeStyle\Config`:

```php
return Dalee\CodeStyle\Config::create()
	->setFinder(
		PhpCsFixer\Finder::create()
			->in(__DIR__ . '/src')
	);
```

### phpcs

To extend the ruleset create your own `ruleset.xml`:


```xml
<?xml version="1.0"?>
<ruleset name="MyStandard">
    <description>Coding standard based on dalee/php-config with some additions.</description>
    <file>./src</file>
    <rule ref="./vendor/dalee/php-config/ruleset.xml" />
</ruleset>
```

## Requirements

* `PHP 5.6` for `php-cs-fixer`

## Links

* [php-cs-fixer](http://cs.sensiolabs.org/)
* [phpcs](https://github.com/squizlabs/PHP_CodeSniffer)
