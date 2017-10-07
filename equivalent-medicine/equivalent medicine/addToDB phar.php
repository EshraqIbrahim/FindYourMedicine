    <?php
session_start();
    mysql_connect("localhost","root","");
        mysql_select_db("signup");
    if(isset($_POST['signup'])){
        $username=mysql_real_escape_string($_POST['username']);
        $location=mysql_real_escape_string($_POST['location']);
        $email=mysql_real_escape_string($_POST['email']);
        $password=mysql_real_escape_string($_POST['password']);
        $confpass=mysql_real_escape_string($_POST['confpass']);
        if($password==$confpass){
            $sq=mysql_query("SELECT * FROM users WHERE email = '$email'");
            if($rows = mysql_fetch_assoc($sq)){            
                header("REFRESH:0;URL=warning.php");
            }
        else {
           
$password= md5($password);
                $sql="INSERT INTO users(username,location,email,password) VALUES ('$username','$location','$email','$password')";
                mysql_query($sql);
                $_SESSION['username']=$username;
                $_SESSION['location']=$location;
                header('REFRESH:0;URL=pharmacypage.php');           
        }
    }
        else {
            header("REFRESH:0;URL=warning.php");
            }
    }

