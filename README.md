# classNames

PHP class name generator, ported from the JS [classnames](https://github.com/JedWatson/classnames) library.

## Usage

```php
<?php

classNames("foo", "bar"); // => "foo bar"
classNames("foo", [ "bar"=> true ]); // => "foo bar"
classNames([ "foo-bar"=> true ]); // => "foo-bar"
classNames([ "foo-bar"=> false ]); // => ""
classNames([ "foo" => true ], [ "bar"=> true ]); // => "foo bar"
classNames([ "foo" => true, "bar"=> true ]); // => "foo bar"

// multiple argument types
classNames("foo", [ "bar"=> true, "duck"=> false ], "baz", [ "quux"=> true ]); // => "foo bar baz quux"

// falsy values are ignored
classNames(null, false, "bar", 0, 1, [ "baz"=> null ]); // => "bar 1"
```
