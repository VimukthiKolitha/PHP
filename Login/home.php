
<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<div>
        <a href="login.php">login</a>
        <a href="home.php">content</a>
        <a href="logout.php">logout</a>
    </div>
    <br><br>
    <?php 
      
      if(empty($_SESSION["user"]))
      {
        echo "please login";
      }
      else
      {
    ?>
    <div>This is home page</div>

    <?php
    //closing tag for else
      }
    ?>
</body>
</html>