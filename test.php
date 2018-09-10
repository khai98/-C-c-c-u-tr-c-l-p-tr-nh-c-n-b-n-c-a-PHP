<?php
$number = 7;
function TotalSingple($number)
{
    $ketqua = 0;
    $i = 1;
    while ($i <= 7) {
        $ketqua += $number--;
    }
    echo $ketqua;
}
?>