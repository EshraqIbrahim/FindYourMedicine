<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Medicines.com</title>
<style type="text/css">
body{
background-image:url(http://i.imgur.com/6PWfW5p.jpg);
background-repeat:no-repeat;
}
h{
font-weight:bold;
font-size:220%;
color:rgb(102, 217, 255);
font-family:Apple Chancery, cursive;
}
#home{
font-weight:bold;
color:rgb(102, 217, 255);
font-size:140%;
position:absolute;
top:15px;
left:910px;
font-family:Apple Chancery, cursive;
}
#home:hover,
#home:focus {
    color:#4d4;
}
#aboutus{
font-weight:bold;
color:rgb(102, 217, 255);
font-size:130%;
position:absolute;
top:15px;
left:990px;
font-family:Apple Chancery, cursive;
}
#aboutus:hover,
#aboutus:focus {
    color:#4d4;
}
#login{
font-weight:bold;
color:rgb(102, 217, 255);
font-size:130%;
position:absolute;
top:15px;
left:1130px;
font-family:Apple Chancery, cursive;
}
#login:hover,
#login:focus {
    color:#4d4;
}
#contact{
font-weight:bold;
color:rgb(102, 217, 255);
font-size:130%;
position:absolute;
top:15px;
left:1290px;
font-family:Apple Chancery, cursive;
}
#contact:hover,
#contact:focus {
    color:#4d4;
}
#home1{
font-weight:bold;
font-size:400%;
font-family:Apple Chancery, cursive;
color:rgb(255, 255, 128);
position:absolute;
top:30%;
left:17%;}
#p1{
font-size:200%;
font-family:Apple Chancery, cursive;
color:rgb(255, 255, 128);
position:absolute;
top:45%;
left:20%;}
#search-box-wrapper {
    display: inline-flex;
    font-size: 30px;
	position:absolute;
	top:70%;
	left:30%;
}

.search-box-input {
    font-size: inherit;
    border: 0.2em solid #2dc5d3;
    border-radius: 0.5em 0 0 0.5em;
    padding: 0.2em 0.5em;
    outline: 0;
}

.search-box-input:hover,
.search-box-input:focus {
    border-color: #4d4;
}

.search-box-button {
    font-size: inherit;
    border: 0.2em solid #2dc5d3;
    border-radius: 0 0.5em 0.5em 0;
    background-color: #2dc5d3;
    border-left: 0;
    padding: 0 0.75em;
    color: white;
    font-weight: bold;
    outline: 0;
    cursor: pointer;
	font-size:40px;
}

.search-box-button:hover,
.search-box-button:focus {
    border-color: #4d4;
    background-color: #4d4;
}






</style>

</head>
<body>
<h><img src="http://i.imgur.com/ify43ph.png" height="30"/>MEDICINES.COM</h>
<a href="index.php"><div id="home">Home</div></a>
<a href="about us.php"><div id="aboutus">ABOUT US</div></a>
<a href="login-register.php"><div id="login">Login/Register</div></a>
<a href="contact us.php"><div id="contact">Contact US</div></a>
<hr/>

<div id="home1">SEARCH FOR YOUR MEDICINE</div>
<p id="p1">We are helping you to find your medicine and its equivalent,<br/>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;also know from where you can buy it.</p>
<form action="search.php" method="POST">
<div id="search-box-wrapper">
 <input type="text" name="search" placeholder="Search...." class="search-box-input">
 <a href="search medicine.html"><button class="search-box-button">&#128269;</button></a>
 </form>
 
</div>










</body>
</html>
