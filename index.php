<!DOCTYPE html>

<?php
        define('root', 'C:\wamp64\www\pictures/');
        
        ?>

<html>
    <head></head>
    <body>
        
        <?php
        session_start();
        ?>
        <div style="background-color:yellow; text-align:center">
        <h1><p>welcome  to pictures<?php //echo"<h1>". $_SESSION['customer_ID'] ."</h1>";?></p></h1>

        </div>
       
       
       
        
        <?php
         $name="lasiegase/Hacker.jpg";
         echo "<img src=" . "$name" . " alt=picture />";
        ?>
        <form action="picture_login.php" method="post" enctype="multipart/form-data">
        <h2>Upload photo</h2>
         <input type="file" name="photo" id="fileSelect"></br></br>



<input type="submit" name="submit" value="login">

        </form>
        <div id="content"></div>
        
    
















        <a href="view.php">Sign in</a>
        <script  src="phpjs-script.js "></script>
    </body>
</html>
<?php







?>