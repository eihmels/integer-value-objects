# php-value-objects

inspired by https://martinfowler.com/bliki/ValueObject.html

This library bunch Value Objects.

you can inherit this base Values to adapt it to your wishes.

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
