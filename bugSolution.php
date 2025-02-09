```php
function fixedFunction($array) {
  $names = []; // Initialize $names
  if (empty($array)) {
    return $names; // Return empty array if input is empty
  }

  foreach ($array as $key => $value) {
    // Check if value is an object and has a 'name' property
    if (is_object($value) && isset($value->name)) {
      $names[] = $value->name;
    }
  }

  return $names;
}

$myArray = [];
$result = fixedFunction($myArray);
print_r($result); // Output: Array ( )

$myArray = [{
  "name" => "John",
}, {
  "name" => "Jane"
}];
$result = fixedFunction($myArray);
print_r($result); // Output: Array ( [0] => John [1] => Jane ) 
```