# Test/Demo composite

Test project using API Platform and table with composite primary keys.

## Doctrine limitation

When trying to "map an entity A with a composite primary key as part of the primary key of another entity B", it fails.

## Goals

Evaluate and quantify the amount of work it would require to support this in Doctrine ORM.

## Installation

* `composer install`
* `bin/console doctrine:database:create`
* `bin/console doctrine:schema:create`
* `bin/console hautelook:fixtures:load`

## Database documentation

### Schema

* https://dbdiagram.io/d/5fc5f3413a78976d7b7e068e
