<?php

namespace Stijn\YggiPackageTest;

$env_values = [
    'SNAPPY_DB_HOST',
    'SNAPPY_DB_NAME',
    'SNAPPY_DB_USER',
    'SNAPPY_DB_PASS'
];

foreach ($env_values as $env) {
    if (!isset($_ENV[$env])) {
        throw new \Exception("Missing ENV value ${env}");
    }
}

define("Stijn\YggiPackageTest\DB_HOST", $_ENV['SNAPPY_DB_HOST']);
define("Stijn\YggiPackageTest\DB_NAME", $_ENV['SNAPPY_DB_NAME']);
define("Stijn\YggiPackageTest\DB_USER", $_ENV['SNAPPY_DB_USER']);
define("Stijn\YggiPackageTest\DB_PASS", $_ENV['SNAPPY_DB_PASS']);