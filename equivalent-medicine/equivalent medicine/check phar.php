<?php
    session_start();
    $db= mysqli_connect("localhost", "root", "", "signup");
    if(isset($_POST['login'])){
        $email=mysql_real_escape_string($_POST['email']);
        $password=mysql_real_escape_string($_POST['password']);
        $password= md5($password);
        
        $sql="SELECT * FROM users WHERE email = '$email' AND password = '$password'"; 
        $result= mysqli_query($db, $sql) or die("Failed" . mysql_error());
        $rows = mysqli_fetch_array($result); 
        $_SESSION['username'] = $rows['username'];
        $_SESSION['location'] = $rows['location'];
        if(mysqli_num_rows($result)==1){
            header("REFRESH:0;URL=pharmacypage.php");           
        } else {
            header("REFRESH:0;URL=warning.php");
        }
    }

