# php-value-objects

inspired by https://martinfowler.com/bliki/ValueObject.html

In this Package there are a bunch of Integer Value Objects with some validations.
you can inherit this base Values to adapt it to your wishes.

## Install

```
    composer require eihmels/integer-value-objects

```

## ValueObjects

all Value Objects Inherite from NumberInterface. In this Interface are some basic functions defined.
take a look into src/NumberInterface.php.

You are not allowed to change the values after initializing.

### Basic Integer
src/Integer.php

example: 
```php
    $one = Integer:create(1);
```

### Natural Number 
src/NaturalNumber.php 

A natural Number is a Positive Integer.

example:
```php
    $one = NaturalNumber:create(1);
```

0 isn't a valid NaturalNumber. if you define 0 to natural numbers use NaturalNumbersWithNull.

example:
```php
    $null = NaturalNumberWithNull:create(0);
```

## Codequality Tools
run phpUnit
```
    php ./vendor/bin/phpunit.phar --configuration ./phpunit.xml
    php ./vendor/bin/phpunit.phar --coverage-html ./coverage-report
```
 
run phpstan
```
   php ./vendor/bin/phpcs.phar --standard=./ruleset.xml  ./src/*/
   php ./vendor/bin/phpcs.phar --standard=./ruleset.xml  ./tests/*
```
run phpstan
```
   php ./vendor/bin/phpstan.phar analyse -l max  ./src/
```
