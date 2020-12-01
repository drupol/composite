# Test/Demo composite

Test project using API Platform and table with composite primary keys.

## Installation

* `composer install`
* `bin/console doctrine:database:create`
* `bin/console doctrine:schema:create`
* `bin/console hautelook:fixtures:load`
* `symfony serve --allow-http --no-tls`

The API should be available at: [http://127.0.0.1:8000/api][localhost api].

## Documentation

### Schema

* https://dbdiagram.io/d/5fc5f3413a78976d7b7e068e

### Relations

See the [DB Diagram][dbdiagram] for more information.

[localhost api]: http://127.0.0.1:8000/api
[dbdiagram]: https://dbdiagram.io/d/5fc5f3413a78976d7b7e068e