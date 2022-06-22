<?php
echo "nishita<br>";
$arr=array ("nishita"=>18, "ronak"=>19, "friend"=>3);
krsort($arr);
foreach($arr as $x=>$x_value)
{
	echo "key=" .$x.",value=" .$x_value;
	echo "<br>";
}
?>