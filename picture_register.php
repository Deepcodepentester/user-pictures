<?php

require'picture_connect.php';

$error=array();
$username= $_POST['Username'];
$Gmail=$_POST['Gmail'];
$First_name =$_POST['First_name'];
$Last_name = $_POST['Last_name'];
$password = $_POST['Password'];
$Country = $_POST['Country'];
$Date_of_Birth = $_POST['Date_of_Birth'];
$Occupation = $_POST['Occupation'];
if (isset($_POST['submit'])) {
    if (empty($_POST['First_name']) || empty($_POST['Last_name']) || empty($_POST['Gmail']) 
    || empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['Comfirm_Password'])
     || empty($_POST['Country']) || empty($_POST['Date_of_Birth']) || empty($_POST['Occupation'])
     || empty($_FILES['photo'])) {

        
        echo("Fill IN ALL FIELD");


       

            
    }
    // the working code if all field are filled
    else {
        # code...
        
        $sql= query("select email from user_info where email = '$Gmail'");
        $sql1=query("select username from user_info where username = '$username'");

       
        
        // if  gmail or username matched any in the database
        if (mysqli_num_rows($sql)>0 || mysqli_num_rows($sql1)>0) {
            # code...
            echo "Invalid username or gmail  <br/> ";
           exit();
        }
        // checkin password filled matched
        elseif( $_POST['Password'] != $_POST['Comfirm_Password']) {
           
            $error[] = " password must match  <br/>";
            
            $error[] ="invalid username and gmail".mysqli_error($db);
            
        }
       //filling the database with the information after the if and elsif check from above
        else {
            # code...
            $sql2 = query("insert into user_info (first_name, last_name, password, email, username, country, occupation,date_of_birth) values('$First_name' ,
            '$Last_name',
            '$password',
            '$Gmail',
            '$username',
            '$Country',
            '$Occupation',
            '1998-06-14')");

            
            if ($sql2) {
                # code...
                echo "<h1>Registration successful</h1>";
                require'picture_process.php';
                
                

            } else {
                # code...
                echo "An error occured".mysqli_error($db);
            }
            
        } 
        
    }

        
        

         
} else {
    # code...
    echo"form not submitted  <br/>";
}
     
        

    























?>