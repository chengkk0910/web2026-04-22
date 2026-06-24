<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    [
        'id' => '1',
        'name' => 'amy',
        'mobile' => '0911-0624'
    ],
    [
        'id' => '2',
        'name' => 'bob',
        'mobile' => '0922'
    ],
    [
        'id' => '3',
        'name' => 'cat',
        'mobile' => '0933'
    ]
];
// dd($data);

// echo "abc";

$data = [
    'myString' => 'abc',
    'myTime' => '11:00'

];

// dd($data);
echo json_encode($data);
