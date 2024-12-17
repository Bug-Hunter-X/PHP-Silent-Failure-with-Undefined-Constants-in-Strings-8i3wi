The solution is simple: always define your constants before using them in strings.  The improved code includes a definition of the `UNEXPECTED_CONSTANT` which should resolve the unexpected output.

```php
<?php
define('UNEXPECTED_CONSTANT', 'Expected Value');

$message = "The value is: " . UNEXPECTED_CONSTANT;
echo $message;
?>
```