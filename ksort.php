<?php
echo "nishita<br>";
$arr=array ("nishita"=>18, "ronak"=>19, "friend"=>3);
ksort($arr);
foreach($arr as $x=>$x_value)
{
	echo "key=" .$x.",value=" .$x_value;
	echo "<br>";
}
?>