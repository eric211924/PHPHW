<?php


$poker = range(0, 51);

echo "洗牌前 <br>";

foreach ($poker as $k => $v) {
    echo "$k : $v <br>";
}

// echo "<hr>";

// $point = rand(0, 51);

// $temp = $poker[51];
// $poker[51] = $poker[$point];
// $poker[$point] = $temp;

// foreach ($poker as $k => $v) {
//     echo "$k : $v <br>";
// }

// echo "<hr>";

// $point = rand(0, 50);

// $temp = $poker[50];
// $poker[50] = $poker[$point];
// $poker[$point] = $temp;

// foreach ($poker as $k => $v) {
//     echo "$k : $v <br>";
// }

// echo "<hr>";

// $point = rand(0, 49);

// $temp = $poker[49];
// $poker[49] = $poker[$point];
// $poker[$point] = $temp;

// foreach ($poker as $k => $v) {
//     echo "$k : $v <br>";
// }

echo "<hr>";

for ($i = 0; $i < 51; $i++) {
    // echo "<hr>";

    $point = rand(0, 51-$i);

    $temp = $poker[51-$i];
    $poker[51-$i] = $poker[$point];
    $poker[$point] = $temp;

    // foreach ($poker as $k => $v) {
    //     echo "$k : $v <br>";
    // }
}
echo "<hr>";

echo "洗牌後 <br>";
foreach ($poker as $k => $v) {
    echo "$k : $v <br>";
}
