<?php
$arr1 =array("li","wang","zhao");
$arr2=array(12,12,12);
$c=array_combine($arr1,$arr2);
print_r($c)."<br>"	;
$d=array_count_values($arr2);
print_r($d);
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");
$result=array_diff($a1,$a2,$a3);
print_r($result);
$resa=array_diff_assoc($a1,$a2);
echo "<br>";
print_r($resa);
print_r($result);
$a6=array(1,2,3,4);
function test($x){
	return ($x*2+2);
	};
print_r(array_map("test",$a6));
?>