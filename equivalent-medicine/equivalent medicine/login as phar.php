<!doctype html>
<html>
<head>
<title>create new account|PHARMACY</title>
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
width:75%;
height:65%;
top:15%;
left:10%;
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
        top:30%;
        left:9%;
}	
.login{	font-size: 110%;
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
<h><img src="http://i.imgur.com/ify43ph.png" height="30"/>LOG IN|PHARMACY</h>
<hr width="95%"/>
<div id="form">
    <form action="check phar.php" method="POST">
<strong>E-mail Address *</strong>
<br/>
<br/>
<input required="required" type="text" name="email" class="input-box" size="100"/>
<br/>
<br/>
<strong>Password *</strong>
<br/>
<br/>
<input required="required" type="password" name="password" class="input-box" size="100"/>
<br/>
<br/>
<input required="required" type="submit" name="login" value="Log in" class="login"/>
</form>
</div>
</div>
</body>
</html>
