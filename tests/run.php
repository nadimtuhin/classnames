<?php

require_once __DIR__ . '/../classnames.php';

$cases = array(
  // README examples
  array(array("foo", "bar"), "foo bar"),
  array(array("foo", array("bar" => true)), "foo bar"),
  array(array(array("foo-bar" => true)), "foo-bar"),
  array(array(array("foo-bar" => false)), ""),
  array(array(array("foo" => true), array("bar" => true)), "foo bar"),
  array(array(array("foo" => true, "bar" => true)), "foo bar"),
  array(array("foo", array("bar" => true, "duck" => false), "baz", array("quux" => true)), "foo bar baz quux"),
  array(array(null, false, "bar", 0, 1, array("baz" => null)), "bar 1"),
  array(array("btn", array("btn-active" => true, "btn-big" => false)), "btn btn-active"),
  array(array(), ""),
);

$failures = 0;
foreach ($cases as $i => $case) {
  list($args, $expected) = $case;
  $actual = call_user_func_array('classNames', $args);
  if ($actual !== $expected) {
    $failures++;
    echo "FAIL #$i: expected " . var_export($expected, true) . ", got " . var_export($actual, true) . "\n";
  }
}

echo (count($cases) - $failures) . "/" . count($cases) . " passed\n";
exit($failures > 0 ? 1 : 0);
