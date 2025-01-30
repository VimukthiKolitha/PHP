<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        echo "plase login";
    }
    else{
    ?>
    <form action="" method="post">

        <input type="submit" value="logout" name="out"/>
    </form>
    <?php
       if(isset($_POST['out']))
       {
          session_destroy();

          echo "logout success..!";
       }
    ?>
    <?php
    //closing tag to else
    }
    ?>
</body>
</html>