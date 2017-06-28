<?php
 $x=5;
 function my(){
	 static $x=1;
	 echo $x;
	 $x++;
	 } my();
	 my();
	 my();
	 echo "<h3>我是标题3</h3>","<h4>我是标题4</h4>";
	 print "<p>我是段落p</p>";
	 define("lala","欢迎来到德莱联盟");//常量
	 print lala;
	 $str="请开始你的表演";
	 echo $str."".lala;//并置运算符
	 echo strlen(lala);//输出字符串的长度；
	 $str1="hello world";
	 echo strpos($str1,"w");//查找字符；
	 echo strpos($str1,"a");
	 if($x){
		 echo "我是存在x的";
		 };
		 $n=rand(0,10);//rand函数产生随机整数；两个参数，min，max
	 switch ($n){
		 case "1";
		 echo "今天能找到工作";
		 break;
		 case "2";
		 echo "明天能找到工作";
		 break;
		 case "3";
		 echo "这周能找到工作";
		 break;
		 };
		 $arr=array(1,2,"Curry");
		 echo $arr[2];
		 echo"<p> $arr[1] </p>";
		 for($x=0;$x<count($arr);$x++){//遍历数组
			 echo $arr[$x];
			 echo "<br>";
			 };
	$arr1=array("tom"=>"72","jerry"=>"24","jack"=>"72");
	echo "tom is". $arr1["tom"]."cm","<br>";
	foreach($arr1 as $y=>$value){
		echo "Key=".$y,"value=".$value;
		echo "<br>";
		};
	print_r(array_change_key_case($arr1,CASE_UPPER));
	echo "<br>";
	print_r(array_chunk($arr,1,false));
?>