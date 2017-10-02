<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$date2=str_replace("-", "/", $date);
echo "the value of \$date2 :".$date2."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)



?>