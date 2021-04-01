
<?php
require("picture_connect.php");
query( "CREATE TABLE IF NOT EXISTS path(lastName VARCHAR(50),path VARCHAR(50))");
query("insert into path(lastName,path)values('{$_POST['username']}','{$_FILES["photo"]["name"]}' )");
echo $_POST['username'];


$name="../images/Hacker.jpg";
echo "<img src=" . "$name" . " alt=picture width=50px/>";
echo "<img src=" . "lasiegase/Hydrangeas.jpg" . " alt=picture width=50px/>";

echo "<h1>"."hi"."</h1>";



if(!$_FILES){
    echo "Error: " . $_FILES["photo"]["error"] . "<br>";
} else{
    echo "File Name: " . $_FILES["photo"]["name"] . "<br>";
    echo "File Type: " . $_FILES["photo"]["type"] . "<br>";
    echo "File Size: " . ($_FILES["photo"]["size"] / 1024) . " KB<br>";
    echo "Stored in: " . $_FILES["photo"]["tmp_name"]."<br>";
   // echo "<img src=" . $_FILES["photo"]["tmp_name"] . " alt=picture />"; 

   
    /*$_FILES["photo"]["name"];
    
    
    
    $name=basename($_FILES["photo"]["name"]);
    echo $name."<br>"; */
    
   
    $temp_name=$_FILES["photo"]["tmp_name"];
    $upload_dir="mynewdir";
    move_uploaded_file($temp_name,"{$_POST['username']}/{$_FILES["photo"]["name"]}");
 //  move_uploaded_file($_FILES['photo']['tmp_name'],
//"/wamp64/www/mynewdir/".$_FILES['photo']['name']);

//define ("FILEREPOSITORY","/var/www/5e/15/photo");

//$result = move_uploaded_file($_FILES['photo']['tmp_name'],
//FILEREPOSITORY . '_' .
//$_FILES['photo']['name']);
//if ($result == 1) echo "<p>File successfully uploaded.</p>";
//else echo "<p>There was a problem uploading the file.</p>";

}


echo "<a href=" . "view.php?username={$_POST['username']}" . " >Picture</a>";
//<a href="/addusers.php?firstname=chidera&lastname=nebo&username=kennethitaly&password=123&login=Submit">Picture</a>




?>



