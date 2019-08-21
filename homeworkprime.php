<head>
    <style>
        body {
            background-color: lightblue;
        }
        td{
            background-color: 		#bbffbb;
            width: 10%;
            text-align: center;
            font-family: fantasy;
            font-size: 20px;
        }
        td.find{
            background-color: #d2a2cc;
            
        }
        
    </style>
</head>


<?php

$x1 = range(0, 100); //把 $x 從第0個位置 塞1-100

// foreach ($x1 as $k => $v) {
//     echo "key $k  value  $v ";

//     if (($k) % 10 == 0) echo '<br>';
// }

$x2 = array_fill(1, 100, 0); //標記是否為質數
// echo "<hr>";
// var_dump($x2);

// echo "<hr>";

$x2[2] = 1;
$x2[3] = 1; //標記2 3 為質數

// var_dump($x2);

$x3[] = 2; //記憶已經找到的質數
$x3[] = 3;

// echo "<hr>";
// var_dump($x3);

//以下為  ver1---------------------------------------

// if ($x1[4] % $x3[0] == 0) {
//     echo "$x1[4] 不是質數";
// }


// echo "<hr>";
// var_dump($x3);

// if ($x1[5] % $x3[0] == 0) {
//     echo "$x1[5] 不是質數";
// } else if ($x1[5] % $x3[1] == 0) {
//     echo "$x1[5] 不是質數";
// } else {
//     echo "$x1[5] 是質數";
//     $x2[5] = 1;
//     $x3[] = $x1[5];
// }

// echo "<hr>";
// var_dump($x3);

// if ($x1[6] % $x3[0] == 0) {
//     echo "$x1[6] 不是質數";
// } else if ($x1[6] % $x3[1] == 0) {
//     echo "$x1[6] 不是質數";
// } else if ($x1[6] % $x3[2] == 0) {
//     echo "$x1[6] 不是質數";
// } else {
//     echo "$x1[6] 是質數";
//     $x2[6] = 1;
//     $x3[] = $x1[6];
// }

// echo "<hr>";
// var_dump($x3);

// if ($x1[7] % $x3[0] == 0) {
//     echo "$x1[7] 不是質數";
// } else if ($x1[7] % $x3[1] == 0) {
//     echo "$x1[7] 不是質數";
// } else if ($x1[7] % $x3[2] == 0) {
//     echo "$x1[7] 不是質數";
// } else {
//     echo "$x1[7] 是質數";
//     $x2[7] = 1;
//     $x3[] = $x1[7];
// }

// echo "<hr>";
// var_dump($x3);
// echo '+++++' . count($x3) . '+++++';

// if ($x1[8] % $x3[0] == 0) {
//     echo "$x1[8] 不是質數";
// } else if ($x1[8] % $x3[1] == 0) {
//     echo "$x1[8] 不是質數";
// } else if ($x1[8] % $x3[2] == 0) {
//     echo "$x1[8] 不是質數";
// } else if ($x1[8] % $x3[3] == 0) {
//     echo "$x1[8] 不是質數";
// } else {
//     echo "$x1[8] 是質數";
//     $x2[8] = 1;
//     $x3[] = $x1[8];
// }

// for ($i = 0; $i < count($x3); $i++) {
//     if (8 % $x3[$i] == 0) {
//         echo "8 不是質數";
//         break;
//     }
//     echo $i;
// }

// echo "<hr>";

// $j = 1;

// for ($i = 0; $i < count($x3); $i++) {
//     if (11 % $x3[$i] == 0) {
//         echo "11 不是質數";
//         $j = 0;
//         break;
//     }
//     // echo $i;
// }

// if ($j == 1) {
//     echo "11 是質數";
// }

// echo "<hr>";

// $j = 1;

// for ($i = 0; $i < count($x3); $i++) {
//     if (12 % $x3[$i] == 0) {
//         echo "12 不是質數1-";
//         $j = 0;
//         break;
//     }
//     // echo $i;
// }

// if ($j == 1) {
//     echo "12 是質數";
// } else {
//     echo "12 不是質數2-";
// }

// echo "<hr>";

// $j = 1;

// for ($i = 0; $i < count($x3); $i++) {
//     if (13 % $x3[$i] == 0) {
//         echo "13 不是質數1-";
//         $j = 0;
//         break;
//     }
//     // echo $i;
// }

// if ($j == 1) {
//     echo "13 是質數";
// } else {
//     echo "13 不是質數2-";
// }


//以上為  ver1---------------------------------------

//以下為  ver2---------------------------------------

// for ($k = 4; $k < 100; $k++) {
//     echo "<hr>";

//     $j = 1;

//     for ($i = 0; $i < count($x3); $i++) {
//         if ($k % $x3[$i] == 0) {
//             echo "$k 不是質數1-";
//             $j = 0;
//             break;
//         }
//         // echo $i;
//     }

//     if ($j == 1) {
//         echo "$k 是質數";
//         $x3[]=$k;
//         $x2[$k]=$j;
//     } else {
//         echo "$k 不是質數";
//     }
//     var_dump($x3);

// }

//以上為  ver2---------------------------------------

//以下為  ver3---------------------------------------

for ($k = 4; $k < 100; $k++) {
    $j = 1;
    for ($i = 0; $i < count($x3); $i++) {
        if ($k % $x3[$i] == 0) {
            $j = 0;
            break;
        }
    }

    if ($j == 1) {
        $x3[] = $k;
        $x2[$k] = $j;
    }
}

//以上為  ver3---------------------------------------


// echo "<hr>";
// // var_dump($x2);
// echo "<hr>";
// var_dump($x3);



echo '<table border="1" width="100%">';

for ($j = 0; $j < 10; $j++) {
    echo  "<tr>";
    for ($i = 1; $i < 11; $i++) {
        $k = $j * 10 + $i;
        if ($x2[$k] == 1) {
            echo '<td class="find"> ' . $k .  '<br><img src="find.jpg" alt=""  width="50px"  title="'. $k .'"/> </td>';

            // echo '<img src="'.$a.'.jpg" alt=""  width="80px" />';
        } else {
            echo "<td > $k </td>";
        }
        // echo "<td > 找到了! $k </td>";
    }
    echo "</tr>";
}

echo '</table>';
?>