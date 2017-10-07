<?php
session_start();
?>
<html>
<head>
<title>Edit account</title>
<style type="text/css">
body{
background-color:#e4d1d1;
}
h{
font-weight:bold;
font-size:210%;
padding-left:410px;
}
#frame{border:2px inset white;
position:absolute;
width:85%;
height:89%;
top:8%;
left:7%;
background-color:white;
padding-top:25px;
padding-left:15px;
}
.input-box{font-size: inherit;
          border: 0.6em solid #e4d1d1;
          border-radius: 0.5em 0.5em 0.5em 0.5em;
          padding: 0.2em 0.5em;
          outline: 0;
		  }
#form{	position:absolute;
        top:15%;
        left:9%;
}
.create{	font-size: 110%;
    border: 0.3em solid #e4d1d1;
    border-radius: 0.5em 0.5em 0.5em 0.5em;
    background-color: #e4d1d1;
    border-left: 0.6em;
    padding: 0 0.75em;
    color: black;
    font-weight: bold;}		  
</style>
</head>
<body>
<div id="frame">
<h>EDIT ACCOUNT</h>
<hr width="95%"/>
<div id="form">
    <form action="edit-db.php" method="POST">
<strong> Email *</strong>
<br/><br/>
<input required="required" name="email" type="text" class="input-box" size="100"/>
<br/><br/>
<strong> User Name *</strong>
<br/><br/>
<input required="required" name="name" type="text" class="input-box" size="100"/>
<br/><br/>
<strong> Current Password *</strong>
<br/><br/>
<input required="required" name="currentpass" type="password" class="input-box" size="100"/>
<br/><br/>
<strong>New password *</strong>
<br/><br/>
<input required="required" name="newpass" type="password" class="input-box" size="100"/>
<br/><br/><br/><br/>
<input required="required" name="submit" type="submit" value="Edit" class="create"/>
</form>
</div>
</div>
</body>
</html>

