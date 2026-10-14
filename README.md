<div align="center">

# classNames

![classNames, join CSS class names and drop the falsy ones](https://raw.githubusercontent.com/nadimtuhin/classnames/master/docs/images/hero.svg)

**Stop gluing class strings by hand.** Pass names and conditions, get one clean string.

`PHP` [`MIT`](LICENSE) `1 file`

</div>

<br>

Building a `class="..."` string in PHP means a pile of `if` and string joins, with stray spaces. `classNames()` does the joining for you. It is a PHP port of the JS [classnames](https://github.com/JedWatson/classnames) library.

<br>

![Get started](https://raw.githubusercontent.com/nadimtuhin/classnames/master/docs/images/h-start.svg)

**1. Get the file:**

```bash
git clone https://github.com/nadimtuhin/classnames.git
```

**2. Load it in your PHP file:**

```php
<?php
require_once 'classnames/classnames.php';
```

**3. Call it:**

```php
echo classNames("btn", ["btn-active" => $isActive, "btn-big" => false]);
// => "btn btn-active" when $isActive is true, "btn" when it is false
```

An array key is the class name. The class is kept when its value is truthy.

<br>

![Need help](https://raw.githubusercontent.com/nadimtuhin/classnames/master/docs/images/h-help.svg)

<details>
<summary>Do I need Composer?</summary>

No. It is one file with no dependencies. Just `require` it.

</details>

<details>
<summary>I got "1" instead of class names</summary>

Pass names as keys: `["foo" => true]`, not `["foo"]`.

</details>

<details>
<summary>Where did my 0 go?</summary>

Falsy values are ignored, and `0` is falsy. In `classNames(null, false, "bar", 0, 1, [ "baz"=> null ])` the result is `"bar 1"`.

</details>

<br>

![For developers](https://raw.githubusercontent.com/nadimtuhin/classnames/master/docs/images/h-dev.svg)

Everything below is reference. You don't need it to get started.

## Usage

PHP class name generator, ported from the JS [classnames](https://github.com/JedWatson/classnames) library.

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
