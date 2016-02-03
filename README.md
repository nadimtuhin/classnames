# classNames
php classNames generator

## example

```php
<?php

classNames("foo", "bar"); // => "foo bar"
classNames("foo", [ "bar"=> true ]); // => "foo bar"
classNames([ "foo-bar"=> true ]); // => "foo-bar"
classNames([ "foo-bar"=> false ]); // => "
classNames([ "foo" => true ], [ "bar"=> true ]); // => "foo bar"
classNames([ "foo" => true, "bar"=> true ]); // => "foo bar"

// lots of arguments of various types
classNames("foo", [ "bar"=> true, "duck"=> false ], "baz", [ "quux"=> true ]); // => "foo bar baz quux"

// other falsy values are just ignored
classNames(null, false, "bar", 0, 1, [ "baz"=> null ]); // => "bar 1"
```