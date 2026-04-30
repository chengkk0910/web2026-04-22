<?php

// 1-10
// for ($i = 1; $i <= 10; $i++) {
//     echo "第 $i 次 <br>";
// }


// 1  + ... 10

$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    echo "第 $i 次 <br>";
    $sum = $sum + $i;
}
echo "sum = $sum";
