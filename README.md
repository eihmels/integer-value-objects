# php-value-objects

inspired by https://martinfowler.com/bliki/ValueObject.html

In this Package there are a bunch of Integer Value Objects with some validations.
you can inherit this base Values to adapt it to your wishes.

## ValueObjects

all Value Objects Inherite from NumberInterface. In this Interface are some basic functions defined.
take a look into src/NumberInterface.php.

You are not allowed to change the values after initializing.

### Basic Integer
src/Integer.php

example: 
```
    $one = Integer:create(1);
```

### Natural Number {\displaystyle \mathbb {N} _{0}}\mathbb {N} _{0}


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
