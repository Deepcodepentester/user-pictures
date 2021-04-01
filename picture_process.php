<?php
define('tem', 'C:\wamp64\www\pictures/');
mkdir(tem."$username");
define('dir', 'C:\wamp64\www\pictures/'.$username."/");


//echo $_FILES['photo']['name'];
$_FILES['photo']['name'];



  // echo $_FILES["Profile_picture"]["tmp_name"];
        //echo $_FILES['Profile_picture']['error'];
      
        echo "File Name: " . $_FILES["photo"]["name"] . "<br>";
        echo "File Type: " . $_FILES["photo"]["type"] . "<br>";
        echo "File Size: " . ($_FILES["photo"]["size"] / 1024) . " KB<br>";
        
        //echo "<img src=" . $_FILES["photo"]["tmp_name"] . " alt=picture />"; 
        move_uploaded_file($_FILES["photo"]["tmp_name"],dir.$_FILES["photo"]["name"]);
    
    var_dump($_FILES);


$fruit=array("mango", "apple");
if (empty($fruit)) {
    # code...
    echo "hi";

}
else{
    var_dump($fruit);
}

?>