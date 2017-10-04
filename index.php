<?php
 
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo '<br>';
echo '<hr>'; 

 
$obj= new main();
$date1=str_replace ("-","/","$date");
$obj->onereplace($date);
$obj->datecompare($date1,$tar);
$obj-> slashPositions($date1);
$obj->counter($date1);
$obj->threestringlength($date1);
$obj->printascii($date1);
$obj->lastTwoChar($date1);

$obj->wordSeparator($date1);
$obj->findLeap($year);
class main {
 
  
public function onereplace($date)
{
 
echo "<b> 2. </b> ";
echo str_replace ("-","/","$date");
echo '<br>';
echo '<hr>'; 
 
}
              

function dateCompare($date1, $tar)
{
echo " <b>3.</b> ";
	if(strtotime($date1) > strtotime($tar))
		echo "The Future";
	else if(strtotime($date1) < strtotime($tar))
			echo "the past";
		else
			echo "Oops";
	echo "<br>";
 echo '<hr>'; 
}


function slashPositions($date1)
{
echo " <b>4.</b> ";
	$positions = array();
	$pos = -1;
	while(($pos = strpos($date1, "/", $pos+1)) !== false)
		$positions[] = $pos;
	$result = implode(' ', $positions);
	echo $result;
	echo "<br>";
 echo '<hr>';
 
}

function counter($date)
{
echo " <b>5.</b> ";
$words = explode("/",$date);
echo "No of words " . sizeof($words);
echo "<br>";
echo "List of words:";
echo "<br>";
foreach ($words as $word)
{
 
echo $word . "<br>";
 
}
               echo '<hr>';
              
}             

              
public function threestringlength ($date1)
{
                             
echo '<b>6.</b> The string length is ';
echo strlen($date1);
echo '<hr>';

       
}
 
 
              

 
 
 function printascii($date1)
{
echo " <b>7.</b> ";
	echo "The Ascii value of the String is :".ord($date1[0]);
	echo "<br>";
 echo '<hr>'; 
}
 
               
 function lastTwoChar($date1)
{
echo " <b>8.</b> ";
	echo "The last two Characters of the date is :".substr ("$date1",-2);
	echo "<br>";
 echo '<hr>';
}
             

   public function wordSeparator($date1)
   {
echo "<b>9.</b> To change a string into an array <br>";
 
echo "The string is $date1<br>";
 
$beta= explode('/',$date1);
 
 
 
foreach($beta as $element)
{
 
   echo $element;
 
   echo " ";
}
echo '<hr>';
  }
               


 
 
 
              
public function findLeap ($year)
{
               echo "<b> 10.</b> Leap Year <b>(FOREACH LOOP WITH SWITCH CASE)</b>";
 
echo "<br>";
 
foreach ($year as $y ){
 
switch((($y % 4) == 0) && ((($y % 100) != 0) || (($y % 400) == 0))){
 
case True:
echo  " True";
 
break;
 
default:
echo  " False";
}

}
echo "<br>";
               echo "Leap Year <b>(FOR LOOP)</b>";
echo "<br>";
for($i=0; $i< sizeof($year); $i++){
switch((($year[$i] % 4) == 0) && ((($year[$i] % 100) != 0) || (($year[$i] % 400) == 0))){
case True:
echo  " True";
break;
default:
echo  " False ";
 
}

              
}
               echo '<hr>';
}
}


/*function findLeap($year)
{
    $con = array(400, 100, 4);
    $boo = false;
    foreach($year as $val)
    {
        for($m=0; $m<sizeof($con); $m++)
        {
            switch($con[$m])
            {
                case 400:
                if($val%400 == 0)
                {
                    echo "True ";
                    $boo = true;
                    break;
                }
                
                case 100:
                if($val%100 == 0)
                {
                    echo "False ";
                    $boo = true;
                    break;
                }
                case 4:
                if($val%4 == 0)
                {
                    echo "True ";
                    $boo = true;
                    break;
                }
                default:
                echo "False ";
                break;
            }
            if($boo == true)
                break;
        }
    }
}*/


?>