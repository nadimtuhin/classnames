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

  // list arrays and nesting, as in JS classnames
  array(array(array("foo", "bar")), "foo bar"),
  array(array("a", array("b", array("c" => true, "d" => false))), "a b c"),
  array(array(array("a", array("b", array("c")))), "a b c"),
  array(array(array("a", null, false, "", 0)), "a"),
  array(array(array(123 => true, 456 => false)), "123"),

  // booleans are never class names, so `$cond && "foo"` is safe
  array(array(true), ""),
  array(array("foo", true, false), "foo"),
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
