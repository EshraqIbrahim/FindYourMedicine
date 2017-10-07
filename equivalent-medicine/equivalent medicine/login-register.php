<!doctype html>
<html>
<head>
<title>login|Medicines.com</title>
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
width:87%;
height:86%;
top:8%;
left:7%;
background-color:white;
padding-top:25px;
padding-left:15px;
}
#p1{
font-size:130%;
position:absolute;
top:15%;
left:5%;}
#p2{
font-size:230%;
font-weight:bold;
position:absolute;
top:28%;
left:32%;}
#p3{
font-size:130%;
position:absolute;
top:38%;
left:4%;}
.button-box{
    font-size: 110%;
    border: 1.1em solid #2dc5d3;
    border-radius: 0.5em 0.5em 0.5em 0.5em;
    background-color: #2dc5d3;
    border-left: 0.6em;
    padding: 0 0.75em;
    color: white;
    font-weight: bold;
    outline: 0;
    cursor: pointer;}
#buttons1{position:absolute;
        top:55%;
        left:15%;
	}
#buttons2{position:absolute;
        top:55%;
        left:55%;
	}	
	.button-box:hover,
.button-box:focus {
    border-color: #4d4;
    background-color: #4d4;
}
</style>
</head>
<body>


<div id="frame">
<h><img src="http://i.imgur.com/ify43ph.png" height="30"/>USER ACCOUNT</h>
<hr width="95%"/>
<div id="p1">
<p><strong>Please Note:</strong> This is the login/registration page only for both <strong>Doctors and Pharmacies</strong>.</p>
</div>
<div id="p2">
<p>You are not logged in.</p>
</div>
<div id="p3">
<p>Welcome to Medicines.com. Existing users log in using the "I have an account as a Doctor/Pharmacy" button below. New users may create an account using the "I want to create a new account as a Doctor/Pharmacy" button below.</p>
</div>
<div id="buttons1">
<a href="login as dr.php"><button class="button-box">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;I have an account as a Doctor&ensp;&ensp;&ensp;&ensp;&ensp;</button></a>
<br/><br/><br/><br/>
<a href="login as phar.php"><button class="button-box">&ensp;&ensp;&ensp;&ensp;I have an account as a Pharmacy&ensp;&ensp;&ensp;&ensp;</button></a>
</div>
<div id="buttons2">
<a href="create new account-dr.php"><button class="button-box">&ensp;&ensp;I want to create a new account as a Doctor</button></a>
<br/><br/><br/><br/>
<a href="create new account-phar.php"><button class="button-box">I want to create a new account as a Pharmacy</button></a>
</div>


</body>
</html>

