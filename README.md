# php-config

A set of php configurations for different cool utils such as `php-cs-fixer`.

```
$ composer require --dev ns3777k/php-config
```

## Usage

### php-cs-fixer

### phpcs

To extend the ruleset create your own `ruleset.xml`:


```xml
<?xml version="1.0"?>
<ruleset name="MyStandard">
    <description>Coding standard based on ns3777k/php-config with some additions.</description>
    <file>./src</file>
    <rule ref="./vendor/ns3777k/php-config/ruleset.xml" />
</ruleset>
```

## Requirements

* `PHP 5.6` for `php-cs-fixer`

## Links

* [php-cs-fixer](http://cs.sensiolabs.org/)
* [phpcs](https://github.com/squizlabs/PHP_CodeSniffer)
