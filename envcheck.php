<?php

namespace Stijn\YggiPackageTest;

if (!isset($_ENV['PHP_Host'])) {
    throw new \Exception('Missing ENV value PHP_HOST');
}