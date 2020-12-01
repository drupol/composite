# Test/Demo composite

Test project using API Platform and table with composite primary keys.

## Installation

* `composer install`
* `bin/console doctrine:database:create`
* `bin/console doctrine:schema:create`
* `bin/console hautelook:fixtures:load`
* `symfony serve --allow-http --no-tls`

Your API will be available at [http://127.0.0.1:8000/api][localhost api]

## Database documentation

### Schema

* [https://dbdiagram.io/d/5fc5f3413a78976d7b7e068e][database diagram]

[localhost api]: http://127.0.0.1:8000/api
[database diagram]: https://dbdiagram.io/d/5fc5f3413a78976d7b7e068e