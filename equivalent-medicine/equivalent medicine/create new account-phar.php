<!doctype html>
<html>
<head>
<title>create new account|phar</title>
<style type="text/css">
body{
background-color:rgb(65, 148, 138);
}
h{
font-weight:bold;
font-size:190%;
color:rgb(102, 217, 255);
}
#frame{border:2px inset white;
position:absolute;
width:85%;
height:92%;
top:8%;
left:7%;
background-color:white;
padding-top:25px;
padding-left:15px;
}
.input-box{font-size: inherit;
          border: 0.6em solid #2dc5d3;
          border-radius: 0.5em 0.5em 0.5em 0.5em;
          padding: 0.2em 0.5em;
          outline: 0;
		  }
#form{	position:absolute;
        top:15%;
        left:9%;
}
.create{	font-size: 110%;
    border: 0.3em solid #2dc5d3;
    border-radius: 0.5em 0.5em 0.5em 0.5em;
    background-color: #2dc5d3;
    border-left: 0.6em;
    padding: 0 0.75em;
    color: white;
    font-weight: bold;}		  
</style>
</head>
<body>
<div id="frame">
<h><img src="http://i.imgur.com/ify43ph.png" height="30"/>CREATE NEW ACCOUNT|PHARMACY</h>
<hr width="95%"/>
<div id="form">
    <form action="addToDB phar.php" method="POST">
<strong> Name *</strong>
<br/><br/>
<input required="required" type="text" name="username" class="input-box" size="100"/>
<br/><br/>
<strong>Location *</strong>
<br/><br/>
<input required="required" type="text" name="location" class="input-box" size="100"/>
<br/><br/>
<strong>E-mail Address *</strong>
<br/><br/>
<input required="required" type="text" name="email" class="input-box" size="100"/>
<br/><br/>
<strong>Password *</strong>
<br/><br/>
<input required="required" type="password" name="password" class="input-box" size="100"/>
<br/><br/>
<strong>Confirm password *</strong>
<br/><br/>
<input required="required" type="password" name="confpass" class="input-box" size="100"/>
<br/><br/><br/><br/>
<input type="submit" name="signup" value="create new account" class="create"/>
</form>
</div>
</div>
</body>
</html>

