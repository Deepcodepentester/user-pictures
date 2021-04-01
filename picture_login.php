<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
</head>
<body>
    <?php
    require'picture_connect.php';
    if (isset($_POST['submit'])) {
        
   

    if (empty($_POST['user']) || empty($_POST['pass'])) {
        echo "fill the form";
        header("location:picture_login.php");
        # code...
    } else {
        # code...
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $stm= mysqli_stmt_init($db);

        $sql="select username,password, country from user_info where username=? AND password=? ";
        $stmt=mysqli_prepare($db,$sql);
        if ($stmt) {
            echo "preparation successful </br>";
            mysqli_stmt_bind_param($stmt,"ss",$user,$pass);
            $result = mysqli_stmt_execute($stmt);
           $row= mysqli_stmt_get_result($stmt) ;
          // $get = mysqli_fetch_array($row,MYSQLI_NUM);
          // echo $get[0];
           //$get = mysqli_fetch_array($row,MYSQLI_NUM);
           //echo $get[0];
           # check result returned from query
           if ($get = mysqli_fetch_array($row,MYSQLI_NUM) ) {
               # code...
               echo "correct username";
               session_start();
               $_SESSION['user']="$user";
               header("location:index.php");
           } else {
               # code...
               echo "no result returned </br>";
               echo  mysqli_error($db);
           }
           
           
        } else {
            # code...
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error($db);
        }
        

        
    }
}
    
    
    ?>
    






    <form action="picture_login.php" method="post" enctype="multipart/form-data">


        <h2>Upload File</h2>
       
        username:<input type="text" name="user" /></br></br>
       password: <input type="text" name="pass" id="fileSelect"></br></br>
        <input type="submit" name="submit" value="login">
        
    </form>
    <a href="picture_register.html">Sign Up</a>
</body>
</html>