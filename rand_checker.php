<?php
        
$starttime = microtime(true);

$summ = array(0, 0);

for($i=1;$i<=1000; $i++) {
    for ($j=0; $j<100; $j++) {
        $array[] = rand(1,2);
    }
    $con = array_count_values($array);
    $summ[0] =+ $con[1];
    $summ[1] =+ $con[2];
}

$s = array_sum($summ);
$v1 = $summ[0];
$v2 = $summ[1];
$v1_counter = ($v1*100) / ($v1 + $v2);
$v2_counter = ($v2*100) / ($v1 + $v2);
echo 'Liczba 1 została wylosowana: ' . $v1_counter . '%.' . "\n";
echo 'Liczba 2 została wylosowana: ' . $v2_counter . '%.';

$endtime = microtime(true);