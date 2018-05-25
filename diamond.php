<?php
echo "Vvedite chislo: ";
$handle = fopen ("php://stdin","r");
$diamond = fgets($handle);

dia($diamond);
/*
     *
    ***
   ******/
function dia($diamond){
   $d1 = "*";
   $d  = "*";
   $p = " ";
   $p1 =" ";
   $diamond1 = $diamond;
   if($diamond % 2  == 0){
   	echo "Chislo chetnoe";
   	return false;
   }
   else{
   	for($i = 1;$i <= $diamond;){
   		$p .= $p1.$p1;
   		$i +=2;  
   	}
   	for($i = 1;$i <= $diamond;){
       echo substr($p,0,$diamond1);
       echo $d."\n";
       $d .=$d1. $d1;   
       $i += 2;
       $diamond1 -=1;
   }
       
    for($b = 1;$b < $diamond;){
	  $diamond1 +=2;
	   echo substr($p,0,$diamond1) . substr($d,0,$diamond-2)."\n";
       $diamond1 -= 1;
   	   $diamond -= 2;
   	}
   	return true;
   	   }
}
