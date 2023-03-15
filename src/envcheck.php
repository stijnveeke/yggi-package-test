<?php

namespace Stijn\YggiPackageTest;

if (!isset($_ENV['DB_HOST'])) {
    throw new \Exception('Missing ENV value DB_HOST');
}

define("Stijn\YggiPackageTest\DB_HOST", $_ENV['DB_HOST']);