<?php
$arr=array(1=>"hello",2=>"hey",3=>"hii",4=>"fine",5=>"Nishita");
$sl=array_splice($arr,2,2,"true");
$ic=array_splice($arr,2);
print_r($sl);
print_r($ic);
?>