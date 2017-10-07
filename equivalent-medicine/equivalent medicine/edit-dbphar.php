<?php
session_start();
$email=mysql_real_escape_string($_POST['email']);
$username=mysql_real_escape_string($_POST['name']);
$currentpassword =mysql_real_escape_string($_POST['currentpass']);
$curent = md5($currentpassword);
$newpassword =mysql_real_escape_string($_POST['newpass']);
$location = mysql_real_escape_string($_POST['location']);
$newwpassword= md5($newpassword);
  mysql_connect("localhost","root","");
        mysql_select_db("signup");
        $sql = mysql_query("SELECT * FROM users WHERE email = '$email' AND password='$curent'");
        if($rows = mysql_fetch_assoc($sql)){
         $sqll = mysql_query("UPDATE users SET username = '$username', password ='$newwpassword' , location='$location' WHERE email ='$email'");
         $_SESSION['username'] = $rows['username'];
         $_SESSION['location'] = $rows['location'];
         header("REFRESH:0;URL=pharmacypage.php");         
        }
        else{
           header("REFRESH:0;URL=warning.php");
        }
        ?>
    </body>
</html>

