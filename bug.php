```php
function buggyFunction($array) {
  if (empty($array)) {
    return null; // Handle empty array
  }

  foreach ($array as $key => $value) {
    // Assume $value is an object with a 'name' property
    $names[] = $value->name; // Potential error: Notice: Undefined variable: names
  }

  return $names; 
}

$myArray = [];
$result = buggyFunction($myArray);
print_r($result); // Output: Notice: Undefined variable: names in ... on line 7
```