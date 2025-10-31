# Brain Games

## Описание
Набор консольных мини-игр: чётность, калькулятор, НОД, прогрессия, простые числа.
## Требования
- PHP >= 8.1
- Composer
## Установка (локально)
```bash
composer install
composer dump-autoload
```
## Установка (глобально)
```bash
composer global require vendor/package
```
## Запуск
```bash
brain-games
brain-even
brain-calc
brain-gcd
brain-progression
brain-prime
```
## Разработка
```bash
composer dump-autoload
# при наличии линтера/статики:
# make lint
# vendor/bin/phpstan analyse
```
### Hexlet tests and linter status:
[![Actions Status](https://github.com/creiddom/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/creiddom/php-project-45/actions)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=creiddom_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=creiddom_php-project-45)
[Even-asciinema](https://asciinema.org/a/42CrFE3xIy6SydDhkU9fFUHLQ)
[Calc-asciinema](https://asciinema.org/a/xz0f9XOPag2cFvjewBS7zFi6D)
[Gcd-asciinema](https://asciinema.org/a/Lm1tUJkipiyvKIA0Tr3TG5rPA)
[Progression-asciinema](https://asciinema.org/a/5dK6yk7YzpvPoudBVrfK4uxk6)
[Prime-asciinema](https://asciinema.org/a/n1X6uaLJ5xqkyQXjnBb53kFrF)