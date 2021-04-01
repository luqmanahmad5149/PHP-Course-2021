<?php

// Null coalescing assignment operator

$person = [
    'name' => 'luqman',
    'age' => 25,
    'gender' => 'male',
];

// long
$person['relay'] = $person['relay'] ?? 'single';
// Short
$person['address'] ??= 'unknown';

echo '<pre>';
var_dump($person);
echo '</pre>';


// Ternary if

$age = 0;

$myAge = $age ?: 18;

$myAge = $age < 20 ? 'Young' : 'Old';

// echo $myAge;

// Null coalescing operator

$name = isset($name) ? $name : 'ramli';

$name =  $name ?? 'kamal'; 

// null coalescing vs ternary operator

echo $name ?? 'ramli'; // return the first argument

echo $name ?: 'ramli'; // return if the first argument was truthy