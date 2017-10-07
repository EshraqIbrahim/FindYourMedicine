<?php
session_start();
    mysql_connect("localhost","root","");
        mysql_select_db("signupDoc");
    if(isset($_POST['signup'])){
        $username=mysql_real_escape_string($_POST['username']);
        $email=mysql_real_escape_string($_POST['email']);
        $password=mysql_real_escape_string($_POST['password']);
        $confpass=mysql_real_escape_string($_POST['confpass']);
        if($password==$confpass){
            $sqr=mysql_query("SELECT * FROM users WHERE email = '$email'");
            if(mysql_num_rows($sqr)!=1){            
                $password= md5($password);
                $sql="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
                mysql_query($sql);
                $_SESSION['username']=$username;
                header('REFRESH:0;URL=page.php');
            }
        else {
           header("REFRESH:0;URL=warning.php");           
        }
    }
        else {
            header("REFRESH:0;URL=warning.php");
            }
    }

