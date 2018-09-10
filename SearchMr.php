<?php
$users = array(

    [
        'name' => 'mr Dung',
        'age' => 28,
        'bank' => 200,
    ],
    [
        'name' => 'Mr Duy',
        'bank' => 250,
        'age' => 35,
    ],
    [
        'name' => 'Mr Linh',
        'bank' => 300,
        'age' => 25,
    ],
    [
        'name' => 'Mrs Trang',
        'bank' => 250,
        'age' => 25,
    ]

);

// hien thi arry!
function display ($users) {
    echo ("Information : ")."</br>";
    foreach ($users as $key => $user) {
        echo strtoupper("name : ".$user["name"]."</br>"."age : ".$user["age"]."</br>"."bank : ".$user["bank"]."</br></br>");
    }
}
echo display($users)."</br>";

// Tinh tong age and bank !
function changeWord($users) {
    $age = 0;
    $bank = 0;
    foreach ($users as $key => $user) {
        $up = strtoupper($user["name"]);
        $find = strpos($up, 'MR ');

        if ($find !== false && $user["age"] >=28 ) {
                $age = $age + $user["age"];
                $bank = $bank + $user["bank"];
        }
    }
    echo  "Total Age : ".$age . "</br>";
    echo  "Total Bank : ".$bank. "</br>";
};



echo  (" 'if >= 20 {total age and  bank}' ")."</br>";
echo changeWord($users);
?>

