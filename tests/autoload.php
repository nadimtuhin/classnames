<?php

// Composer users get classNames() from vendor/autoload.php
require __DIR__ . '/../vendor/autoload.php';

if (!function_exists('classNames')) {
  echo "FAIL: classNames() not loaded by Composer autoload\n";
  exit(1);
}

// a manual require of the same file must not redeclare it
require __DIR__ . '/../classnames.php';

echo "autoload ok\n";
