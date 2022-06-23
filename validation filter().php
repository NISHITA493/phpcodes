<?php
echo"nishita<br>";
$email="nishu230@gmail.com";
$email=filter_var($email,FILTER_SANITIZE_EMAIL);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)=== true)
{
    echo("$email is a valid email address");
}else
{
    echo("oooooooo$email is not a valid email address");
}
?>
