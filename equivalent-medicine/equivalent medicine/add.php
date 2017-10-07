        <?php
        mysql_connect("localhost","root","");
        mysql_select_db("drugs");
        $drug = mysql_real_escape_string($_POST['med']) ;
        $sql = mysql_query("SELECT * FROM drugs WHERE drugname = '$drug' ");
        
       
        if($rows = mysql_fetch_assoc($sql)){
            header("REFRESH:0;URL=warning2.php");
        }
        else {
            $eff = mysql_real_escape_string($_POST['eff']);
            $query="INSERT INTO drugs(drugname,effectivematerial) VALUES ('$drug','$eff')";
            mysql_query($query);
            header("REFRESH:0;URL=page.php");
        }
        