<?php

echo 'Hello PHP';
echo "\n\r";
$str =  "Hi Yoan";
printf($str . " from Stanly");
$arr = ['Stanimir', 'Yoan', 'Gesha', "Pepi"];
echo "\n\r";

print "Best Softuni students is : " . "\r\n";
print_r( $arr);

require_once ('Students.php');
$a = getSortedList($arr);
echo 'Alphabetical sort : ';
echo "\n\r";
print_r($a);
$arr = addNewStudent($arr, 'Mincho');
print_r($arr);