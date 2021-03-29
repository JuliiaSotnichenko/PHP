<?php

date_default_timezone_set('Europe/Luxembourg');

// 
echo date('d') . '<br>';


echo date('m') . '<br>';

echo date('Y/m/d H:i:s');
echo '<br>';

$timeStamp = mktime(19, 00, 30 , 04, 22, 2019);

// echo 'Timestamp : ' . $timeStamp; 
echo date('Y/m/d H:i:s', $timeStamp) . '<br>';

//  

echo strtotime('now') . '<br>';
echo strtotime('19 October 2001') . '<br>';
echo strtotime('+2 day') . '<br>';



?>