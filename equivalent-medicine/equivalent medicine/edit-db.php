<?php
session_start();
$email=mysql_real_escape_string($_POST['email']);
$newname=mysql_real_escape_string($_POST['name']);
$currentpassword =mysql_real_escape_string($_POST['currentpass']);
$curent = md5($currentpassword);
$newpassword =mysql_real_escape_string($_POST['newpass']);
$newwpassword= md5($newpassword);
  mysql_connect("localhost","root","");
        mysql_select_db("signupdoc");
        $sql = mysql_query("SELECT * FROM users WHERE email = '$email' AND password='$curent'");
        if($rows = mysql_fetch_assoc($sql)){
         $sqll = mysql_query("UPDATE users SET username = '$newname', password ='$newwpassword' WHERE email ='$email'");
         $_SESSION['username']=$rows['username'];
         header("REFRESH:0;URL=page.php");
        }
        else{
            header("REFRESH:0;URL=warning.php");
        }
?>
