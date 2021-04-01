<?php

// $array = [
//     'blue',
//     'red',
//     'yellow',
// ];

// for ($i = 0; $i < count($array); $i++ ) {
//     echo $array[$i]."<br/>";
// }

$array = [
    ['name' => 'luqman', 'age' => 25 ],
    ['name' => 'kamal', 'age' => 24],
    ['name' => 'ramli', 'age' => 22]
];

echo '<pre>';
var_dump($array);
echo '</pre>';

// for ($i = 0; $i < count($array); $i++){
//     foreach ($array[$i] as $value) {
//         echo $value."<br/>";
//     }
// }

// foreach ($array as $value) {
//     foreach ($value as $item) {
//         echo $item."<br/>";
//     }
// }

for ($i = 0; $i < count($array); $i++){
    for ($k = 0; $k < count($array[$i]); $k++){
        echo $array[$i][$k];
    }
}