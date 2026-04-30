<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$myArr = [1, 2, 3,];
// print_r($myArr);
// dd($myArr);
// echo $myArr[0];

$assocArr = [
    "s1" => "amy",
    "s2" => "bob",
    "s3" => "cat"
];
// dd($assocArr);
// echo $assocArr["s2"];


// 我想要顯示全部的myArr , assocArry ?
// loop 找到 這兩個東西

// index key 0 
// echo count($myArr);
// for ($i = 0; $i < count($myArr); $i++) {
//     echo "myArr[$i] = " . $myArr[$i] . "<br>";
// }

// foreach
foreach ($myArr as $key => $value) {
    echo "$key => $value <br>";
}


foreach ($assocArr as $key => $value) {
    echo "$key => $value <br>";
}


