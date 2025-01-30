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
    <form action="" method="post">
         <input type="text" placeholder="Enter email" name="email"/>
         <input type="password" placeholder="Enter password" name="pass"/>
         <input type="submit" value="login" name="log"/>
    </form>
    <div>
       <?php 
       //check if button clied or not
           if(isset($_POST["log"]))
           {
            //get details from inout fields
              $uer_name = $_POST["email"];
              $password = $_POST["pass"];

              //cheking user name and password
              if($uer_name == 'admin')
              {
                   if($password == '123')
                   {
                       echo "login success";

                       //inform to other pages he successfully login 
                       //implement this part inside all pages
                       session_start();
                       //who is login person in here its admin
                       $_SESSION['user'] = 'admin';
                   }else
                   {
                    echo "incorrect password";
                   }
              }
              else{
                echo "incorrect user name";
              }
           }
       ?>
    </div>  
</body>
</html>