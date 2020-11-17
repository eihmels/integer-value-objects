#! /bin/sh

php ./vendor/bin/phpunit.phar --configuration ./phpunit.xml
php ./vendor/bin/phpunit.phar --coverage-html ./coverage-report
php ./vendor/bin/phpcs.phar --standard=./ruleset.xml  ./src/*/
php ./vendor/bin/phpcs.phar --standard=./ruleset.xml  ./tests/*
php ./vendor/bin/phpstan.phar analyse -l max  ./src/