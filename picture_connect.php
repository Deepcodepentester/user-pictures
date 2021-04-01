<?php

 $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
  $try = "variable exits" ;  
  
  
  if (mysqli_select_db($db,"picture")) {
    # code...
    echo "database selected  <br/>";

} else {
    # code...
    $error[] ="database not selected  <br/>";
}

function query($statement)
{

    global $db;
    $result= mysqli_query($db,$statement);
    if (!$result) {
        die(mysqli_error($db));
        # code...
    }
    else return $result;


}
?>








