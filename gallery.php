<?php
$rd="C:/Users/user/Documents/TENDS INFINITY/images/";
$dh=opendir($rd);
while($filename=readdir($dh)){
    $nh="C:/Users/user/Documents/TENDS INFINITY/images/".$filename;
    if(is_file($nh) and preg_match("/\.jpg$",$filename)){
        echo"<h1>$nh</h1>";
        echo"</br>";



    }


}



?>